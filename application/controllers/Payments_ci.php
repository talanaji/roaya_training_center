<?php 
	class Payments_ci extends MY_Controller
	{
		
		public function index()
		{     if($this->is_logged != 1)
            redirect('Login');
            $data["page_title"] = $this->lang->line("mange_Payments");
			$this->load->view('cp/templates/header',$data);
			$this->load->view('cp/Payments',$data);
			$this->load->view('cp/templates/footer',$data);
		}

  		public function AddEdit_Payments()
		{
			extract($_POST);
 		if(empty($res_std_code) || $res_std_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
		if(empty($m_code) || $m_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
		if(empty($amount) || $amount == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
		if(empty($p_date) || $p_date == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
			
			
			 if($curr_code == '' || $curr_code == NULL){
		 		$arr = array( 
				 		  "st_code"=>$res_std_code , 
				 		  "m_code"=>$m_code , 
				 		  "	amount"=>$amount , 
				 		  "info"=>$info, 
						  "p_date"=>date('Y-m-d',strtotime($p_date))  ) ;
				 
				  
 				 $doo = $this->db->insert("payments",$arr);
				 $thisid =  $this->db->insert_id();   
				 
			 } 
			
			 if($doo)
				{
				  echo $this->lang->line('alert_success');
				}
				else
				  {
					 echo $this->lang->line('alert_error');
 				  }
		}
	   public function get_items($table,$primary_key, $txt , $chbox)
	    {  
 			 $d = $this->get_all_items($table);
			
    		 foreach($d as  $key=>$dd )
 			 {
			 $as3ad=$dd->st_code;
			 $as3ad2=$dd->m_code;
			   $this->db->select('st_name');
                $this->db->from('students');
                $this->db->where('st_code',$as3ad);
                $reault_array = $this->db->get()->result_array();
                $d = $reault_array[0]['st_name'];
                $this->db->from('payment_methods');
                $this->db->where('m_code',$as3ad2);
                $reault_array = $this->db->get()->result_array();
                $d2 = $reault_array[0]['m_name'];
							
				 echo "<tr title=''>  
 			           <td>".$d."</td>
 			           <td>".$dd->p_date."</td>
 			           <td>".$d2."</td>
 			           <td>".$dd->amount."</td>
 						<td>
						<a style='cursor:pointer' class='Del' title='".$dd->p_code."'><button type='button' class='btn btn-danger btn-circle'><i class='fa fa-times'></i> </button></a>
								</td>
					         </tr>";
 			 }
		 }
		 public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
			
		}
			
		}



		
?>