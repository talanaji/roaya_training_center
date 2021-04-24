<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports extends MY_Controller {

	public function index()
	{

		    $this->load->view('templates/header',$data);
			$this->load->view('welcome_message');
			$this->load->view('templates/footer',$data);
 	}
	public function St_Payments($table)
	{
		
		 $this->load->view('templates/header',$data);
			$this->load->view('St_Payments');
			$this->load->view('templates/footer',$data);
	}
		public function reports_teachers()
	{
			$data["page_title"] = $this->lang->line("reports_teachers");
		    $this->load->view('templates/header',$data);
			$this->load->view('re_teachers');
			$this->load->view('templates/footer',$data);
	}
	public function get_reservations ($st , $te ,$con, $s_date , $e_date)
	{
							if($this->session->userdata('User_type') == 2 ) //Teacher  
			{
				$table_join = " , users ";
				$where_join = " and teachers.te_ID = users.u_ID
				                and users.u_code =".$this->session->userdata('User_code');
		    }
			elseif($this->session->userdata('User_type') == 3) // Student
			{
				$table_join = " , users ";
				$where_join = " and students.st_ID = users.u_ID
				                and users.u_code =".$this->session->userdata('User_code');
			}
			else{
				$table_join = "";
				$where_join = "";
				}
			
          $arry =  "";
		if($st != 0 || $te != 0 || $s_date != 0 || $e_date!= 0 ||$con != "all" ||$con != 0 )
		{
		//$arry= "where";
		 $And = "And";
		 if($te != 0 && $this->session->userdata('User_type') == 1)
		 {
			
		   $arry = $arry ." ". $And." res_teach_code = ".$te;
			 
		 }
	   if($con != "all" || $con != 0)
		    {
		
		     $arry = $arry ." ". $And."  res_is_confirmed = ".$con;
			 	
			}
	  if($st != 0)
		    {
		
		     $arry = $arry ." ". $And."  res_std_code = ".$st;
			 	
			}
	   if($s_date != 0)
	   {
	
		$arry = $arry ." ". $And. " res_time_end  >= '".$s_date."'";
		
	   }
	     if($e_date != 0)
	   {
	
		$arry = $arry ." ". $And."  res_time_end  <= '".$e_date."'";
		
	   }

		}
		$d = $this->db->query("select * from 
									reservations , 
									teachers , 
									students , 
									rooms, courses ".$table_join."
									
			                 where res_teach_code = te_code 
							 and   res_std_code = st_code  
							 and   res_cors_code = c_code  
							 and   res_room_code = room_code ".
							  $where_join." ".$arry."
							  order by res_code desc ")->result();		
	//	$d = $this->db->query("select * from reservations ".$arry." order by res_code desc ")->result();		
		
		
		
		
		
		
		
		foreach($d as  $key=>$dd )
                 {
					  
					  $this->db->select('rest_name');
                     $this->db->from('reservation_status');
                     $this->db->where('rest_code',$dd->res_is_confirmed);
                     $q = $this->db->get()->row()->rest_name;
					   $this->db->select('st_name');
                     $this->db->from('students');
                     $this->db->where('st_code',$dd->res_std_code);
                     $qq = $this->db->get()->row()->st_name;
					   $this->db->select('te_name');
                     $this->db->from('teachers');
                     $this->db->where('te_code',$dd->res_teach_code);
                     $qqq = $this->db->get()->row()->te_name;
					  $this->db->select('te_name');
                     $this->db->from('teachers');
                     $this->db->where('te_code',$dd->res_teach_code);
                     $qqq = $this->db->get()->row()->te_name;
					 echo "<tr>
                               <td>".$qq."</td>
                                <td>".$qqq."</td>
                                <td>".$dd->res_time_start."</td>
                                <td>".$dd->res_time_end."</td>
								<td>".$q."</td>
                                <td>".$dd->res_teach_note."</td>
                                  </tr>";	
				 }
		
	}
	public function get_st_table ($table)
	{
		$d = $this->get_all_items('students');
		
             foreach($d as  $key=>$dd )
                 {
					 $mss = "";
					 $d7 = "";
					 $d4 = $this->GetAllSumHour($dd->st_code);
					 $d7 = $this->allpayments($dd->st_code);
					 $d6 = $this->GetAllSumHourToday($dd->st_code);
					 $d5 = $this->GetAllAmontHourMonth($dd->st_code);
					 $d7=$d7 - $d6;
					 if ($d7 < 0)
					 {
					 $mss = "class='table-danger'";
					 }
					 else if($d7 > 0)
					 {
						 $mss = "class='table-success'"; 
					 }
					 if($d4 == "" || $d4 == null)
						 $d4 = $this->lang->line("no_data");
					 if($d5 == "" || $d5 == null)
						 $d5 = $this->lang->line("no_data");
					 $as3ad = "";
					  $as3ad=$dd->st_paymentmethods_code;
					  $this->db->from('payment_methods');
                $this->db->where('m_code',$as3ad);
                $reault_array = $this->db->get()->result_array();
                $d = $reault_array[0]['m_name'];
		 echo "<tr ".$mss.">
                                            <td>".$dd->st_name."</td>
                                            <td>".$dd->st_phone1."</td>
                                            <td>".$dd->st_payment_date."-".$this->lang->line("of_month")."</td>
                                            <td>".$d."</td>
                                            <td>".$d4."</td>
                                            <td>".$d5."</td>
                                            <td>". $d7 ."</td>
											 <td >
<a style='cursor:pointer' class='Del1' title='".$dd->p_code."'><img src='".base_url()."public/assets/images/icon/email.png' width='25' height='25' alt='Flowers in Chania'></a>
<a style='cursor:pointer' class='Del1' title='".$dd->p_code."'><img src='".base_url()."public/assets/images/icon/sms-token.png' width='25' height='25' alt='Flowers in Chania'></a>
		 
											 </td>
                                            
                                        </tr>";	
                 }
	}
 public function GetAllSumHour($id)
	 {	

       $query2 = $this->db->get_where('reservations', array('res_std_code' => $id,'res_is_confirmed'=>1));
            foreach ($query2->result() as $row)
                 {
				
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);		 
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		$sum_time = $sum_time + $sum;
            }
				return $sum_time ;
				 
	 }
public function GetAllAmontHourMonth($id)
	 {
		$query3 = $this->db->get_where('reservations', array('res_std_code' => $id,'res_is_confirmed'=>1));
         $sum_time = 0;
		 $month = date('m');
             foreach ($query3->result() as $row)
                 {
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);		
		$monthdata =  date('m',$time_start);
		$m =$monthdata -$month;
        if( $m == 0 )
		{
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		$sum_time = $sum_time + $sum;
		}
                  }
				  return $sum_time ;	
	 }
	 public function GetAllSumHourToday($id)
	 {
		 
		$query4 = $this->db->get_where('reservations', array('res_std_code' => $id,'res_is_confirmed'=>1));
         $sum_time = 0;
		 $amont =0;
		 $mm =0;
		$s = 0;
	    // $month = date('m');
             foreach ($query4->result() as $row)
                 {
		$time_start = strtotime($row->res_time_start);
        $time_end= strtotime($row->res_time_end);	
      //  $sum_amont = $row->res_paid_price - $row->res_teacher_percent;		
        $sum_amont = $row->res_paid_price;		
		$sum =  $time_end - $time_start;
		$sum =  $sum / 3600;
		//$sum_time = $sum_time + $sum;
		 $s= $sum_amont * $sum;
		 $amont =$amont +$s;
                  }
				 
				  return  $amont ;
	 }
	 	 public function allpayments($id)
	 {
		 
		$query5 = $this->db->get_where('payments', array('st_code' => $id));
		 $mmm =0;
	 
             foreach ($query5->result() as $row)
                 {
	               $mmm = $mmm + $row->amount ;
	
                  }
				 
				  return  $mmm ;
	 }
}
?>