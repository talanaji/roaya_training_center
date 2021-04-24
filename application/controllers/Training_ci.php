<?php 
	class Training_ci extends MY_Controller
	{ 
		 
		public function  group_train_reg()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("grouptr_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/group_training_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
	   public function trainings()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("training_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/trainings_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
  	   public function AddEdit_trainings()
		{
			extract($_POST);
  			if(empty($tr_title) || $tr_title == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("tr_title");
			  exit();
		    }
			if(empty($tr_hour_no) || $tr_hour_no == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("tr_hour_no");
			  exit();
		    }
			if(empty($tr_price) || $tr_price == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("tr_price");
			  exit();
		    }
			 
			
  			if($tr_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array(
				         "tr_title"=>$tr_title , 
				         "tr_hour_no"=>$tr_hour_no , 
				         "tr_price"=>$tr_price , 
				         "tr_desc"=>$tr_desc , 
 						 "tr_active" => $ac) ;
		 if($curr_code == '' || $curr_code == NULL)
		 {
			 if(redundancy_where_value_s("Training_courses" , "tr_title" , $tr_title , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("Training_courses",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("Training_courses" , "tr_title" , $tr_title , " and tr_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("tr_code",$curr_code);
				$doo = $this->db->update("Training_courses",$arr);
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
			
		public function get_trainings()
		{
			$d = $this->get_all_items("Training_courses");
 			 foreach($d as  $dd )
			 {
				 if($dd->tr_active == 1)
					 $ac = 'checked=checked';
				 else $ac = '';
				 echo "<tr>  
 			           <td>".$dd->tr_title."</td>
						<td><input type='checkbox'  ".$ac."  disabled='disabled'/></td>
 						<td><a style='cursor:pointer' class='Del' title='".$dd->tr_code."'><i class='fa fa-remove'></i></a> |
						     <a style='cursor:pointer'  class='Edit'
								title= '".$dd->tr_code."'
								tr_title = '".$dd->tr_title."'
								tr_hour_no = '".$dd->tr_hour_no."'
								tr_price = '".$dd->tr_price."'
								tr_desc = '".$dd->tr_desc."'
 								tr_active = '".$dd->tr_active."'><i class='fa fa-edit'></i> </a>
								</td>
					         </tr>";
			 }
		}	
		
		public function AddEdit_GRreserv()
		{
				extract($_POST);
			    if(empty($reg_teach_code) || $reg_teach_code == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_teach_code");
				  exit();
				}
				if(empty($reg_std_code) || $reg_std_code == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_std_code");
				  exit();
				}
				//if(empty($reg_tr_code) || $reg_tr_code == '')
				//{
				 // echo $this->lang->line("required").$this->lang->line("reg_tr_code");
				  //exit();
			//	}
				if(empty($reg_room_code) || $reg_room_code == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_room_code");
				  exit();
				}

				if(empty($reg_end_date) || $reg_end_date == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_end_date");
				  exit();
				}
				if(empty($reg_paid_price) || $reg_paid_price == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_paid_price");
				  exit();
				}
				if(empty($reg_notes) || $reg_notes == '')
				{
				  echo $this->lang->line("required").$this->lang->line("reg_notes");
				  exit();
				}
			/**********************************************************************/
 					$en_date_obj = new DateTime(date('Y-m-d H:i',strtotime($reg_end_date)));
				    $en_date = $en_date_obj->format("Y-m-d");
  			 //$diffrence_time =  $st_date_obj->diff($en_date_obj)->format("%H:%I"); 
			 
				
  			    $exist_r = $this->db->query('select count(*) CTR from reservations 
			 							 where    
										        res_teach_code = "'.$reg_teach_code.'"
										 and    res_room_code  = "'.$reg_room_code.'"
										 and    res_time_start      = "'.$en_date.'"
  										 and    res_is_confirmed = 0 ')->row();
 				$exist_gr = $this->db->query('select count(*) CTGR from  registration_courses 
			 							 where    
										       reg_teach_code = "'.$reg_teach_code.'"
										 and   reg_room_code = "'.$reg_room_code.'"
										 and   reg_end_date   = "'.$en_date.'"
										 and   reg_is_complete	= 0')->row();
			 if($exist_r->CTR  > 0   )
				 { 
 					 echo $this->lang->line('reservation_live');
					 exit;
				 }
				if($exist_gr->CTGR > 0)
				{
					echo $this->lang->line('registrarionTR_live');
					 exit;
				}
 			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if( $en_date <= date('Y-m-d'))
				{
					echo $this->lang->line("en_date_lesstodate");
					exit;
				}
  				
				for($i=0; $i<=count($reg_std_code)-1;$i++)
				{
				 
					$arr = array( 
							  "reg_date"=> date('Y-m-d H:i'), 
							  "reg_tr_code"=>$reg_tr_code, 
							  "reg_paid_price"=>$reg_paid_price , 
							  "reg_end_date"=>$reg_end_date , 
							  "reg_std_code"=>$reg_std_code[$i]  , 
							  "reg_teach_code"=>$reg_teach_code , 
							  "reg_room_code"=>  $reg_room_code, 
							  "reg_notes"=>$reg_notes  
							 ) ;
   				 $doo = $this->db->insert("registration_courses",$arr);
  			  }
			 } 
		  else
			 {
                	$arr = array( 
 				 		  "reg_tr_code"=>$reg_tr_code, 
				 		  "reg_paid_price"=>$reg_paid_price , 
				 		  "reg_end_date"=>$reg_end_date , 
				 		  "reg_std_code"=>$reg_std_code[0]   , 
				 		  "reg_teach_code"=>$reg_teach_code , 
				 		  "reg_room_code"=>  $reg_room_code, 
				 		  "reg_notes"=>$reg_notes  
				         ) ;
				 $pk = $curr_code;
				 $this->db->where("reg_code",$curr_code);
				 $doo = $this->db->update("registration_courses",$arr);
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
	    public function view_subs()
		{
			$data["page_title"] = $this->lang->line("view_all_subs");
			$data['d'] = $this->db->query("select * from 
									 			registration_courses , 
												teachers , 
												students , 
												rooms, Training_courses  
 			                 where reg_teach_code = te_code 
							 and   reg_std_code = st_code  
							 and   reg_tr_code = tr_code  
							 and   reg_room_code = room_code 
 							 order by reg_code desc ")->result();		  
			
               		// if( $this->get_users_btnprivs(13,$this->session->userdata('User_code'),$this->session->userdata('User_type')) > 0 || $this->session->userdata('User_type')==1)
		
			//	$data["btn_res_edit"] = 1 ; 
			
			$this->load->view('cp/templates/header',$data);
			$this->load->view('cp/registration_table_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
	    public function attend_std()
		{
			$data["page_title"] = $this->lang->line("attend_std");
		 
  				// if( $this->get_users_btnprivs(13,$this->session->userdata('User_code'),$this->session->userdata('User_type')) > 0 || $this->session->userdata('User_type')==1)
 			        //	$data["btn_res_edit"] = 1 ; 
 			$this->load->view('cp/templates/header',$data);
			$this->load->view('cp/attendace_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
	    public function get_trainigs_today()
		{
			extract($_POST);
			//current attendance where training_code ...
 			
 			  
			$d = $this->db->query("select * from 
									 			registration_courses , 
												teachers , 
												students , 
												 Training_courses  
 			                 where reg_teach_code = te_code 
							 and   reg_std_code = st_code  
							 and   reg_tr_code = tr_code 
							 and   reg_tr_code = '".$tr_post."'
							 and   reg_end_date  >=  '".date('Y-m-d')."'
							 and   reg_is_complete = 0 
  							 order by reg_code desc ")->result();	
			foreach($d as  $dd )
			 { 
				$get_curr_att = $this->db->query ("select * from attendance 
			                                   where att_reg_code = '".$dd->reg_code."'
											   and  DATE_FORMAT(att_date_time ,'%Y-%m-%d') = '".date("Y-m-d")."'")->row();			 
 				 if($dd->reg_is_complete == 1)
					 $ac = 'checked=checked';
				 else 
					 $ac = '';
				 $curr_att = $get_curr_att->att_reg_code > 0 ?'disabled=disabled':'';
				 echo "<tr>";
			 
 			     echo   "<td><input type='hidden' name='checkthishid[]' value='".$dd->reg_code."'/>
				   <input id='checkbox_".$dd->reg_code."' type='checkbox' ".$curr_att." name='checkthis[]' value='".$dd->reg_code."' class='ck_table'/></td>
 			            <td>".$dd->st_name."</td>
 			            <td>".$dd->te_name."</td>
 			            <td>".$dd->tr_title."</td>
  			            <td>".$dd->reg_date."</td>
  			            <td>".$dd->reg_end_date."</td>" ;
				 if($get_curr_att->att_reg_code > 0)  // if this reg has already attendace 
					echo "<td>". $get_curr_att->att_notes ."</td>";
					 else
  					echo "<td id='btn_".$dd->reg_code."'><button type='button' style='cursor:pointer'  class='btn btn-primary regthis' title= '".$dd->reg_code."'>".$this->lang->line('btn_attend')."</button>
							</td>
						 </tr>";
					 }
		}
		
		public function save_group_att()
		{
			extract($_POST);
		 
			 for($i=0 ;$i<count($checkthishid);$i++)
			 {
 				 if($checkthis[$i] > 0) // The checkbox is checked at least one CK
				   $att_note = $this->lang->line('Attended');
 				 else
				   $att_note = $this->lang->line('notAttend');
				 
					
				    $arr[$i] = array("att_reg_code" => $checkthishid[$i] , 
									  "att_date_time" => date('Y-m-d H:i') , 
								 	  "att_notes" =>$att_note);
					$this->db->insert("attendance",$arr[$i]);
				 
				 $out .= $checkthis[$i] .',';
			 }
			echo $out;
		}
		public function save_one_att()
		{
			extract($_POST);
			if(!empty($tr_post))
			{
				$arr = array(
					           "att_reg_code"=>$tr_post ,
					           "att_date_time"=>date("Y-m-d H:i") ,
					           "att_notes"=> $this->lang->line('Attended')  
				  );
				if($this->db->insert("attendance",$arr))
					echo 1 ;
				else
					echo 0;
			}
		}
		public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
		
	}
?>