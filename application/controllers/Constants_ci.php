<?php 
	class Constants_ci extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function courses()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("cousrses_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/cousrses_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function schools()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("schools_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/schools_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function reserv_state()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("reservst_title");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/reserv_state_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
	    public function payment_methods()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("payments_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/payments_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function subscribes()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("subscribes_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/subscribes_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function rooms()
		{
			$data["page_title"] = $this->lang->line("rooms_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/rooms_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
        public function Training_category()
        { if($this->is_logged != 1)
            redirect('Login');
            $data["page_title"] = $this->lang->line("Training_category_managment");
            $this->load->view('cp/templates/header',$data);
            $this->load->view('cp/training_category_vw',$data);
            $this->load->view('cp/templates/footer',$data);
        }
		public function std_status()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("status_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/std_status_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function AddEdit_courses()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
			if(empty($c_name) || $c_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("R_title");
			  exit();
		    }
			if($c_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("c_name"=>$c_name , 
							  "c_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL){
				if(redundancy_where_value_s("courses" , "c_name" , $c_name , "") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    } 
 				 $doo = $this->db->insert("courses",$arr);
			 } 
			else
			{
				if(redundancy_where_value_s("courses" , "c_name" , $c_name , " and c_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
				
				$this->db->where("c_code",$curr_code);
				$doo = $this->db->update("courses",$arr);
				
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
	    public function AddEdit_schools()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
				
			if(empty($sc_name) || $sc_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
	 
			
			if($sc_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("sc_name"=>$sc_name , 
						 "sc_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("schools" , "sc_name" , $sc_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("schools",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("schools" , "sc_name" , $sc_name , " and sc_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("sc_code",$curr_code);
				$doo = $this->db->update("schools",$arr);
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

	    public function AddEdit_payment_methods()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
 			if(empty($m_name) || $m_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("m_name");
			  exit();
		    }
	        if($m_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("m_name"=>$m_name , 
						 "m_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("payment_methods" , "m_name" , $m_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			     $doo = $this->db->insert("payment_methods",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("payment_methods" , "m_name" , $m_name , " and m_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("m_code",$curr_code);
				$doo = $this->db->update("payment_methods",$arr);
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
        public function AddEdit_Training_category()
        { if($this->is_logged != 1)
            redirect('Login');
            extract($_POST);
            if(empty($trc_name) || $trc_name == '')
            {
                echo $this->lang->line("required").$this->lang->line("m_name");
                exit();
            }
            if($trc_active == 'on')
                $ac = 1;
            else
                $ac = 0;
            $arr = array("trc_name"=>$trc_name ,
                "trc_active" => $ac) ;
            if($curr_code == '' || $curr_code == NULL)
            {
                if(redundancy_where_value_s("Training_categories" , "trc_name" , $trc_name , "") > 0 )
                {
                    echo $this->lang->line('item_exists');
                    exit;
                }
                $doo = $this->db->insert("Training_categories",$arr);
            }
            else
            {
                if(redundancy_where_value_s("Training_categories" , "trc_name" , $trc_name , " and trc_code <> '".$curr_code."'") > 0 )
                {
                    echo $this->lang->line('item_exists');
                    exit;
                }
                $this->db->where("trc_code",$curr_code);
                $doo = $this->db->update("Training_categories",$arr);
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
	    public function AddEdit_subscribes()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
 			if(empty($sub_name) || $sub_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sub_name");
			  exit();
		    }
  			if($sub_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("sub_name"=>$sub_name , 
						 "sub_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("subscribe_type" , "sub_name" , $sub_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("subscribe_type",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("subscribe_type" , "sub_name" , $sub_name , " and sub_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("sub_code",$curr_code);
				$doo = $this->db->update("subscribe_type",$arr);
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
		public function AddEdit_rooms()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
 			if(empty($room_name) || $room_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("room_name");
			  exit();
		    }
  			if($room_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("room_name"=>$room_name , 
						 "room_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("rooms" , "room_name" , $room_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("rooms",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("rooms" , "room_name" , $room_name , " and room_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("room_code",$curr_code);
				$doo = $this->db->update("rooms",$arr);
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
		public function AddEdit_stdStatus()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
 			if(empty($std_name) || $std_name == '')
		    {
			  echo $this->lang->line("st_status_code")."".$this->lang->line("required");
			  exit();
		    }
  			if($std_active == "on")
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("std_name"=>$std_name , 
						 "std_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("std_status" , "std_name" , $std_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("std_status",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("std_status" , "std_name" , $std_name , " and std_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("std_code",$curr_code);
				$doo = $this->db->update("std_status",$arr);
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
 			 foreach($d as  $dd )
			 {
				 if($dd->$chbox == 1)
					 $ac = "<span class='label label-success'>".$this->lang->line('active')."</span>";
					
				 else $ac = "<span class='label label-danger'>".$this->lang->line('Inactive')."</span>" ;
				 echo "<tr class=".$dd->color.">  
 			           <td id='".$dd->$primary_key."' class='".$dd->$primary_key."' name='".$dd->$primary_key."'>".$dd->$txt."</td>
						
						<td>".$ac."</td>
 						<td><a style='cursor:pointer' class='Del' title='".$dd->$primary_key."'>
						 <button type='button' class='btn waves-effect waves-light btn-danger'>".$this->lang->line('delete')."</button></a> 
						 
						     <a style='cursor:pointer'  class='Edit'
								title= '".$dd->$primary_key."'
								$txt = '".$dd->$txt."'
								$chbox = '".$dd->$chbox."'><button type='button' class='btn waves-effect waves-light btn-info'>".$this->lang->line('edit')."</button> </a>
								
								</td>
					         </tr>";
			 }
		 }
		public function AddEdit_reserv_state()
		{ if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
 			if(empty($rest_name) || $rest_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("rest_name");
			  exit();
		    }
  			if($rest_active == 'on')
				$ac = 1;
			else 
				$ac = 0;
			$arr = array("rest_name"=>$rest_name , 
			             "color"=>$color ,
						 "rest_active" => $ac) ;
			 if($curr_code == '' || $curr_code == NULL)
			 {
				 if(redundancy_where_value_s("reservation_status" , "rest_name" , $rest_name , "") > 0 )
			     {
					echo $this->lang->line('item_exists');
					exit;
			    }
  			   $doo = $this->db->insert("reservation_status",$arr);
			 } 
			else
			{ 
				if(redundancy_where_value_s("reservation_status" , "rest_name" , $std_name , " and rest_code <> '".$curr_code."'") > 0 )
			    {
					echo $this->lang->line('item_exists');
					exit;
			    }
 				$this->db->where("rest_code",$curr_code);
				$doo = $this->db->update("reservation_status",$arr);
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
        public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
		
	}
?>