<?php 
	class Reservation_ci extends MY_Controller
	{ 
		public function  odd_reservation()
		{
			$data["page_title"] = $this->lang->line("oddRes_managment");
		    $this->load->view('templates/header',$data);
			$this->load->view('reservation_vw',$data);
			$this->load->view('templates/footer',$data);
		}
  		public function AddEdit_reserv()
		{
			extract($_POST);
		
 			if(empty($res_teach_code) || $res_teach_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_teach_code");
			  exit();
		    }
			if(empty($res_std_code) || $res_std_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_std_code");
			  exit();
		    }
			if(empty($res_cors_code) || $res_cors_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_cors_code");
			  exit();
		    }
			if(empty($res_room_code) || $res_room_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_room_code");
			  exit();
		    }
			if(empty($res_time_start) || $res_time_start == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_time_start");
			  exit();
		    }
			if(empty($res_time_end) || $res_time_end == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_time_end");
			  exit();
		    }
 			if(empty($res_paid_price) || $res_paid_price == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_paid_price");
			  exit();
		    }
			if(empty($res_teacher_percent) || $res_teacher_percent == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_teacher_percent");
			  exit();
		    }
			if(empty($res_admin_note) || $res_admin_note == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("res_admin_note");
			  exit();
		    }
 			if($res_is_confirmed ==  'on')
				$ac = 1;
			else 
				$ac = 0;
			$st_date_obj = new DateTime(date('Y-m-d H:i',strtotime($res_time_start)));
			$en_date_obj = new DateTime(date('Y-m-d H:i',strtotime($res_time_end)));
			
			$st_date = $st_date_obj->format("Y-m-d H:i");
			$en_date = $en_date_obj->format("Y-m-d H:i");
			
			$st_clock =  $st_date_obj->format("H:i");
			$en_clock =  $en_date_obj->format("H:i");
 			
			$diffrence_time =  $st_date_obj->diff($en_date_obj)->format("%H:%I"); 
			 
 			if( $en_date < $st_date)
			{
				echo $this->lang->line("date_range_invalid");
				exit;
			}
	     
		  
			if($st_date  < date('Y-m-d H:i'))
			{
			   echo $this->lang->line('St_date_lesstodate');
				exit;
			}
		 if($curr_code == '' || $curr_code == NULL){
 			 $exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
			 							 where    
										     res_teach_code = "'.$res_teach_code.'"
										 and   res_room_code = "'.$res_room_code.'"
										 and   res_std_code = "'.$res_std_code.'"
										 and   res_todate	= "'.date('Y-m-d').'"');
			 
  			 if($exist_r->num_rows() > 0 )
			 {
				 $qr = $exist_r->row();
				 if($qr->en_date > $st_date)
				 {
					 echo $this->lang->line('reservation_live');
					 exit;
				 }
			 }
				 
		 		$arr = array( 
				 		  "res_teach_code"=>$res_teach_code , 
				 		  "res_std_code"=>$res_std_code , 
				 		  "res_cors_code"=>$res_cors_code , 
				 		  "res_todate"=>date('Y-m-d') , 
				 		  "res_room_code"=>$res_room_code , 
				 		  "res_time_start"=>date('Y-m-d H:i',strtotime($res_time_start)) , 
				 		  "res_time_end"=>  date('Y-m-d H:i',strtotime($res_time_end)) , 
				 		  "res_paid_price"=>$res_paid_price , 
				 		  "res_admin_note"=>$res_admin_note , 
				 		  "res_teacher_percent"=>$res_teacher_percent , 
				 		  "res_is_confirmed"=>$ac  
				         ) ;
				 
				  
 				 $doo = $this->db->insert("reservations",$arr);
				 $thisid =  $this->db->insert_id();   
				  
			 } 
			/*else
			{
 
				$arr = array( 
				 		  "res_teach_code"=>$res_teach_code , 
				 		  "res_std_code"=>$res_std_code , 
				 		  "res_cors_code"=>$res_cors_code , 
				 		  "res_todate"=>date('Y-m-d') , 
				 		  "res_room_code"=>$res_room_code , 
				 		  "res_time_start"=>date('Y-m-d H:i',strtotime($res_time_start)) , 
				 		  "res_time_end"=>  date('Y-m-d H:i',strtotime($res_time_end)) , 
				 		  "res_paid_price"=>$res_paid_price , 
				 		  "res_admin_note"=>res_admin_note , 
				 		  "res_is_confirmed"=>$ac  
				         ) ;
				
 			 $pk = $curr_code;
			 $this->db->where("st_code",$pk);
			 $doo = $this->db->update("students",$arr);
				
			}*/
			 if($doo)
				{
				  echo $this->lang->line('alert_success');
				}
				else
				  {
					 echo $this->lang->line('alert_error');
 				  }
		}
	    public function view_reserv()
		{
			$data["page_title"] = $this->lang->line("view_all_reserv");
			$d = $this->db->query("select * from 
									reservations , 
									teachers , 
									students , 
									rooms, courses
			                 where res_teach_code = te_code 
							 and   res_std_code = st_code  
							 and   res_cors_code = c_code  
							 and   res_room_code = room_code 
							 order by res_code desc ")->result();		  
			
		 
			 foreach($d as  $dd )
			 {
				  
				 /*if($dd->$chbox == 1)
					 $ac = 'checked=checked';
				 else $ac = '';
				 echo "<tr title=''>  
 			           <td>".$dd->$txt."</td>
						<td><input type='checkbox' class='".$chbox."'".$ac." disabled='disabled'/></td>
 						<td><a style='cursor:pointer' class='Del' title='".$dd->$primary_key."'><i class='fa fa-remove'></i></a> |
						     <a style='cursor:pointer'  class='Edit'
								title= '".$dd->$primary_key."'
								$txt = '".$dd->$txt."'
								$chbox = '".$dd->$chbox."'
							    st_name = '".$dd->st_name."'
								st_school_code= '".$dd->st_school_code."'
								st_class= '".$dd->st_class."'
								st_phone1= '".$dd->st_phone1."'
								st_phone2= '".$dd->st_phone2."'
								st_ID= '".$dd->st_ID."'
								st_email= '".$dd->st_email."'
								st_town= '".$dd->st_town."'
								st_sex= '".$dd->st_sex."'
								st_birthdate= '".$dd->st_birthdate."'
								st_sub_code= '".$dd->st_sub_code."'
								st_price= '".$dd->st_price."'
								st_active= '".$dd->st_active."'
								st_paymentmethods_code= '".$dd->st_paymentmethods_code."'
								st_status_code= '".$dd->st_status_code."'
								st_payment_date= '".$dd->st_payment_date."'>
								<i class='fa fa-edit'></i> </a>
								</td>
					         </tr>";*/
 			 }
			$this->load->view('templates/header',$data);
			$this->load->view('reserv_table_vw',$data);
			$this->load->view('templates/footer',$data);
		}
	    public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
		
	}
?>