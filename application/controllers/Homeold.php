<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
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
			$data['d'] = $this->db->query("select * from 
									reservations , 
											teachers , 
									students , 
									rooms, courses ".$table_join."
									
			                 where res_teach_code = te_code 
							 and   res_std_code = st_code  
							 and   res_cors_code = c_code  
							 and   res_room_code = room_code ".
							  $where_join."
							  order by res_code desc ")->result();		  
			
		  if( $this->get_users_btnprivs(13,$this->session->userdata('User_code'),$this->session->userdata('User_type')) > 0 || $this->session->userdata('User_type')==1)
			$data["btn_res_edit"] = 1 ; 
		
		$sum_time1 =0;
		$sum_time27= 0;
		$sum_time26= 0;
		$sum_time25= 0;
		
		 foreach($data['d'] as  $dd )
			 { 
		$t = 0;
		$time_start1 = strtotime($dd->res_time_start);//////////////////////////////
        $time_end= strtotime($dd->res_time_end);
        $today = date('Y-m-d') ;
        $date_start = date('Y-m-d',strtotime($dd->res_time_start)) ; 		
        $date_startmo = date('Y-m',strtotime($dd->res_time_start)) ; 		
		$mo = date('Y-m');
		$mmmmm = date('m');
		////////////////////****////////////////////////////////////////////////
		if(  $today == $date_start  )
         {       
		$sum1 =  $time_end - $time_start1;
		$sum1 =  $sum1 / 3600;
		$sum_time25 = $sum_time25 + $sum1;
         }
		 ////////////////////////////////////////////////***///////////////////
		 if($date_startmo == $mo && $dd->res_is_confirmed ==1 )
         {       
		$sum2 =  $time_end - $time_start1;
		$sum2 =  $sum2 / 3600;
		$sum_time26 = $sum_time26 + $sum2;
		
         }
	  ////////////////////////////// ///////////////////////////////////////////
      if($date_startmo == $mo && $dd->res_is_confirmed ==0 )
         {       
		$sum3 =  $time_end - $time_start1;
		$sum3 =  $sum3 / 3600;
		$sum_time27 = $sum_time27 + $sum3;
         }
	//////////////////////////////////////////////////////////////////////////////	
          //$sum_amont5 = $dd->res_paid_price - $dd->res_teacher_percent;
		  	 if($date_startmo == $mo && $dd->res_is_confirmed ==1)
			 {
		  	 if($this->session->userdata('User_type') == 1)
		{			//Teacher 
		$sum_amont5 = $dd->res_paid_price - $dd->res_teacher_percent;
		$sr = $sum2 *  $sum_amont5;
		$ssr = $ssr +$sr;
		}else
		{
		$t = $dd->res_teacher_percent;	
		$sum_amont5 = $sum_amont5 + $t;	
		}
			 }
		
			 }

		 $s5= $ssr;			 
			 
	    	$data["sum1"]=$sum_time26;
		    $data["sum_today"] = $sum_time25;
	        $data["GetAllAmontHourMonth"] = $sum_time27;
	        $data["st_sum"] = $s5;
			
			$data["page_title"] = $this->lang->line("home_page");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/welcome_message');
			$this->load->view('cp/templates/footer',$data);
 	}
public function sendmess()
{
extract($_POST);
		
  			if(empty($usrto) || $usrto == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_teach_code");
			  exit();
		    }
			if(empty($title) || $title == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_std_code");
			  exit();
		    }
			if(empty($full) || $full == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_cors_code");
			  exit();
		    }
			
		 
		 		$arr = array( 
				 		  "userid"=>$this->session->userdata('User_code') , 
				 		  "usrto"=>$usrto , 			 	
				 		  "date"=>date('Y-m-d') , 
				 		  "status"=> 0  , 
				 		  "email"=>$this->session->userdata('User_email') , 
				 		  "full"=>$full , 
				 		  "title"=>$title , 
				 		 
				         ) ;
				 	  
 				 $doo = $this->db->insert("msgs",$arr);
				// $thisid =  $this->db->insert_id();   
				  
			 if($doo)
				{
                      echo $this->lang->line('alert_success');		}
				else
				  {
					 echo $this->lang->line('alert_error');
					 
 				  }	
}
}

