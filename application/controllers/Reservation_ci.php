<?php 
	class Reservation_ci extends MY_Controller
	{ 
		public function  odd_reservation()
		{
             $_SESSION["add_row"]=-1;
             unset($_SESSION["inserted_row"]);

             $_SESSION["inserted_row"][0]= -1;
		    if($this->is_logged != 1)
                redirect('Login');
			$data["page_title"] = $this->lang->line("oddRes_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/reservation_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}

        public function clear_session()
        {
            $_SESSION["add_row"] = $_SESSION["add_row"] -1 ;
        }
		public function  add_f()
		{
		    if($this->is_logged != 1)
               redirect('Login');
		   if(!isset($_SESSION["add_row"]) && $_SESSION["add_row"] <=0)
			 $_SESSION["add_row"] = -1;
             $_SESSION["add_row"] =  $_SESSION["add_row"] + 1 ;

             echo "<div class='row product' id='product".$_SESSION["add_row"]."' title='".$_SESSION["add_row"]."'>";
             echo "<div class='col-md-3' style='margin-top: 3rem;margin-bottom: 1rem;border: 0;border-top: 1px solid red;'>";
             echo "<div class='form-group'>";
             echo $this->lang->line('res_cors_code');
             echo "<span class='text-danger'>*</span><div class='controls'>";
             echo "<select class='select2 form-control custom-select' id='res_cors_code".$_SESSION["add_row"]."' name='res_cors_code[]' required data-validation-required-message=''>";
             echo $this->lang->line('required');
             echo "<option value=''>";
             echo $this->lang->line('choose');
             echo"</option>";
             echo draw_lists2("courses" , "c_code" , "c_name","c_active","1");
             echo"</select></div></div></div> <div class='col-md-3' style='margin-top: 3rem;margin-bottom: 1rem;border: 0;border-top: 1px solid red;'><div class='form-group'>";
             echo $this->lang->line('res_teach_code');
             echo "<span class='text-danger'>*</span><div class='controls'>";
             echo "<select class='select2 form-control custom-select' id='res_teach_code".$_SESSION["add_row"]."' name='res_teach_code[]' required data-validation-required-message=''>";
             echo "<option value=''>";
             echo $this->lang->line('choose');
             echo "</option>";
             echo draw_lists2("teachers" , "te_code" , "te_name" ,"te_active","1");
             echo "</select></div></div></div><div class='col-md-2' style='margin-top: 3rem;margin-bottom: 1rem;border: 0;border-top: 1px solid red;'><div class='form-group'>";
             echo $this->lang->line('res_time_start');
             echo"<span class='text-danger'>*</span><div class='controls'>";
             echo"<input type='text'  class='form-control dt' id='res_time_start".$_SESSION["add_row"]."' onchange='get_existance(".$_SESSION["add_row"].")'   name='res_time_start[]'  required data-validation-required-message=''>";
             echo "</div></div></div><div class='col-md-2' style='margin-top: 3rem;margin-bottom: 1rem;border: 0;border-top: 1px solid red;'><div class='form-group'>";
             echo $this->lang->line('res_time_end');
             echo "<span class='text-danger'>*</span><div class='controls'>";
             echo "<input type='text'  class='form-control dt' id='res_time_end".$_SESSION["add_row"]."' onchange='get_existance(".$_SESSION["add_row"].")'    name='res_time_end[]'  required data-validation-required-message=''>";
             echo "</div></div></div>";
             echo "<div class='col-md-2' style='margin-top: 3rem;margin-bottom: 1rem;border: 0;border-top: 1px solid red;'><div class='form-group'>";
             echo $this->lang->line('res_teacher_percent');
             echo "<span class='text-danger'>*</span> <div class='controls'>";
             echo "<input type='text'  class='form-control' onchange='get_existance(".$_SESSION["add_row"].")'  id='res_teacher_percent".$_SESSION["add_row"]."' name='res_teacher_percent[]'  required data-validation-required-message=''>";
             echo  "</div> </div></div>";

        echo '<div class="col-md-8">
			    <div class="form-group">
			       <label class="control-label mb-10">'.$this->lang->line('te_notes').'</label>
				   <textarea class="form-control" id="res_admin_note" name="res_admin_note[]"></textarea>
			   </div>
			 </div>
			 <div class="col-md-4">
			   <div class="form-group">
			      <a class="copyrow" style="cursor: pointer" title="'.$_SESSION["add_row"].'"> <i class="fa fa-copy"></i></a>
			      <a class="delrows" style="cursor: pointer" title="'.$_SESSION["add_row"].'"> <i class="fa fa-remove"></i></a>
               </div>
             </div></div></div></div>';
		}
	    public function  group_reserv()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("groupRes_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/group_reserv_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
  		public function AddEdit_reserv()
		{if($this->is_logged != 1)
            redirect('Login');
			extract($_POST);
			if($this->session->userdata('User_type') == 1)
			{
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
			}
 			if($res_is_confirmed ==  'on')
				$ac = 1;
			else 
				$ac = 0;
			
		 if($curr_code == '' || $curr_code == NULL){
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
		//	if($st_date  < date('Y-m-d H:i'))
		//	{
			//   echo $this->lang->line('St_date_lesstodate');
			//	exit;
		//	}
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
			else
			{
               if($this->session->userdata('User_type') == 2) // .. Teacher .. //
			   {
				   if(empty($res_teach_note) || $res_teach_note == '')
					{
					  echo $this->lang->line("required").$this->lang->line("res_teach_note");
					  exit();
					}
				   $arr = array(  
				 		  "res_teach_note"=>$res_teach_note , 
				 		  "res_is_confirmed"=>$res_is_confirmed  
				         ) ;
				   
 			   }
				elseif($this->session->userdata('User_type') == 1)// .. Admin .. //
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
				 		  "res_admin_note"=>$res_admin_note , 
				 		  "res_teach_note"=>$res_teach_note , 
				 		  "res_teacher_percent"=>$res_teacher_percent , 
				 		  "res_is_confirmed"=>$res_is_confirmed  
				         ) ;
				}
				   
				
 			 $pk = $curr_code;
			 $this->db->where("res_code",$curr_code);
			 $doo = $this->db->update("reservations",$arr);
			   	
			}
			 if($doo)
				{
                      echo $this->lang->line('alert_success');		}
				else
				  {
					 echo $this->lang->line('alert_error');
					 
 				  }
		}
		public function get_inserted_row_val()
        {
            extract($_POST);
            echo $_SESSION["inserted_row"][$ins_row_val];
        }
		public function addreserv_new()
        {
            if($this->is_logged != 1)
                exit();
            $big_date = 0;
            $no_room = 0 ;
            $existance =0;
             extract($_POST);

            if($this->session->userdata('User_type') == 1)
            {

                if(empty($res_std_code) || $res_std_code == '')
                {
                    echo $this->lang->line("required").$this->lang->line("res_std_code");
                    exit();
                }
                if(empty($res_paid_price) || $res_paid_price == '')
                {
                    echo $this->lang->line("required").$this->lang->line("res_paid_price");
                    exit();
                }

            }
            if($res_is_confirmed ==  'on')
                $ac = 1;
            else
                $ac = 0;

            if($curr_code == '' || $curr_code == NULL)
            {
                for($i=0;$i<=count($res_cors_code)-1; $i++) {
                    $st_date_obj = new DateTime(date('Y-m-d H:i', strtotime($res_time_start[$i])));
                    $en_date_obj = new DateTime(date('Y-m-d H:i', strtotime($res_time_end[$i])));

                    $st_date = $st_date_obj->format("Y-m-d H:i");
                    $en_date = $en_date_obj->format("Y-m-d H:i");

                    $st_clock = $st_date_obj->format("H:i");
                    $en_clock = $en_date_obj->format("H:i");

                    if ($_SESSION["inserted_row"][$i] == 1) {
                        $exist_new_std[$i] = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '".$en_date."'
                                                   or   res_time_start <=  '".$st_date."') 
                                             and 
                                             ( res_time_end   >= '".$en_date."'
                                               or   res_time_end >=  '".$st_date."' )
                                             and res_std_code   = '".$res_std_code."'
                                             and   res_todate	  = '".date('Y-m-d')."'");

                        $exist_new_tech[$i] = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '".$en_date."'
                                                   or   res_time_start <=  '".$st_date."') 
                                             and 
                                             ( res_time_end   >= '".$en_date."'
                                             or   res_time_end >=  '".$st_date."' )
                                             and res_teach_code   = '".$res_teach_code[$i]."'
                                             and   res_todate	  = '".date('Y-m-d')."'");

                        if($exist_new_std[$i]->num_rows() == 0  && $exist_new_tech[$i]->num_rows() == 0) {

                            if ($en_date > $st_date) {
                                // end date must greater than start date
                                $room_query = $this->db->query("select room_code  from rooms 
			 							 where    room_code not in(
			 							      select res_room_code from 
			 							      reservations 
			 							      where ( res_time_end   >= '".$en_date."'
                                                        or   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        or   res_time_start <=  '".$st_date."' )
			 							      and res_todate = '" . date('Y-m-d') . "' )   limit 1 ")->row();

                                if ($room_query->room_code > 0) // there is room code
                                {
                                    $exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
                                             where    
                                                   res_teach_code = "' . $res_teach_code[$i] . '"
                                             and   res_room_code  = "' . $room_query->room_code . '"
                                             and   res_std_code   = "' . $res_std_code . '"
                                             and   res_todate	  = "' . date('Y-m-d') . '"');

                                    if ($exist_r->num_rows() > 0) {
                                        $arr = array(
                                            "res_teach_code" => $res_teach_code[$i],
                                            "res_std_code" => $res_std_code,
                                            "res_cors_code" => $res_cors_code[$i],
                                            "res_todate" => date('Y-m-d'),
                                            "res_room_code" => $room_query->room_code,
                                            "res_time_start" => date('Y-m-d H:i', strtotime($res_time_start[$i])),
                                            "res_time_end" => date('Y-m-d H:i', strtotime($res_time_end[$i])),
                                            "res_paid_price" => $res_paid_price,
                                            "res_admin_note" => $res_admin_note[$i],
                                            "res_teacher_percent" => $res_teacher_percent[$i],
                                            "res_is_confirmed" => $ac
                                        );


                                        $doo = $this->db->insert("reservations", $arr);
                                        $_SESSION["inserted_row"][$i] = 1;
                                    }
                                }
                                else {$no_room = 1;}
                            }
                            else
                             {
                                $big_date = 1;
                                $dates = $en_date . " < " . $st_date;
                             }
                        }
                        else
                        {
                            $existance++;
                            if($existance == 1)
                            echo $this->lang->line('reserv_exist');
                        }
                    }
                    else{
                        if ($en_date > $st_date)
                        {
                            $exist_new_std[$i] = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '".$en_date."'
                                                   or   res_time_start <=  '".$st_date."') 
                                             and 
                                             ( res_time_end   >= '".$en_date."'
                                               or   res_time_end >=  '".$st_date."' )
                                             
                                             and res_std_code   = '".$res_std_code."'
                                             and   res_todate	  = '".date('Y-m-d')."'");

                            $exist_new_tech[$i] = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '".$en_date."'
                                                   or   res_time_start <=  '".$st_date."') 
                                             and 
                                             ( res_time_end   >= '".$en_date."'
                                             or   res_time_end >=  '".$st_date."' )
                                             and res_teach_code   = '".$res_teach_code[$i]."'
                                             and   res_todate	  = '".date('Y-m-d')."'");

                            if($exist_new_std[$i]->num_rows() == 0  && $exist_new_tech[$i]->num_rows() == 0) {
                                // end date must greater than start date
                                $room_query = $this->db->query("select room_code  from rooms 
			 							 where    room_code not in(
			 							      select res_room_code from 
			 							      reservations 
			 							      where  ( res_time_end   >= '".$en_date."'
                                                        or   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        or   res_time_start <=  '".$st_date."' )
			 							      and res_todate = '" . date('Y-m-d') . "' )   limit 1 ")->row();

                                if ($room_query->room_code > 0) // there is room code
                                {
                                    $exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
                                             where    
                                                   res_teach_code = "' . $res_teach_code[$i] . '"
                                             and   res_room_code  = "' . $room_query->room_code . '"
                                             and   res_std_code   = "' . $res_std_code . '"
                                             and   res_todate	  = "' . date('Y-m-d') . '"');

                                    if ($exist_r->num_rows() > 0) {
                                        $arr = array(
                                            "res_teach_code" => $res_teach_code[$i],
                                            "res_std_code" => $res_std_code,
                                            "res_cors_code" => $res_cors_code[$i],
                                            "res_todate" => date('Y-m-d'),
                                            "res_room_code" => $room_query->room_code,
                                            "res_time_start" => date('Y-m-d H:i', strtotime($res_time_start[$i])),
                                            "res_time_end" => date('Y-m-d H:i', strtotime($res_time_end[$i])),
                                            "res_paid_price" => $res_paid_price,
                                            "res_admin_note" => $res_admin_note[$i],
                                            "res_teacher_percent" => $res_teacher_percent[$i],
                                            "res_is_confirmed" => $ac
                                        );


                                        $doo = $this->db->insert("reservations", $arr);
                                        $_SESSION["inserted_row"][$i] = 1;
                                    }
                                } else {
                                    $no_room = 1;
                                }
                            }
                            else
                            {
                                $existance++;
                                if($existance == 1)
                                echo $this->lang->line('reserv_exist');
                             }
                        }
                        else {
                            $big_date = 1;
                            $dates [] = $en_date . " < " . $st_date ;
                        }
                     }
                }

                if($no_room == 1 )
                     echo "لايوجد غرف متاحة";
                if($big_date == 1 ){
                    echo "لايمكن ان يكون تاريخ الانتهاء اقل من تاريخ البداية ";
                    print_r($dates);
                 }
                if($doo)
                {
                    if($existance == 0)
                    echo "تمت عملية الحجز بنجاح " ;

                }
            }
        }
        public function copy_new_reserv(){
            if($this->is_logged != 1)
                exit();
            extract($_POST);
            $big_date = 0;
            $no_room = 0 ;
            $existance =0;
            if($curr_code == '' || $curr_code == NULL)
            {
                for($i=0;$i<=count($dates)-1; $i++) {
                    $st_date_obj = new DateTime(date('Y-m-d H:i', strtotime($dates_ST[$i])));
                    $en_date_obj = new DateTime(date('Y-m-d H:i', strtotime($dates_ND[$i])));

                    $st_date = $st_date_obj->format("Y-m-d H:i");
                    $en_date = $en_date_obj->format("Y-m-d H:i");

                    $st_clock = $st_date_obj->format("H:i");
                    $en_clock = $en_date_obj->format("H:i");

                    if ($_SESSION["inserted_row"][$i] == 1) {
                        $exist_new[$i] = $this->db->query("select * from reservations 
                                             where    ( res_time_end   >= '".$en_date."'
                                                        and   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        and   res_time_start <=  '".$st_date."' )
                                             and     res_teach_code = '".$teachvalhid."'
                                             and   res_std_code   = '".$stdvalhid."'
                                             and   res_cors_code   = '".$corsvalhid."'
                                             and   res_todate	  = '".$dates[$i]."'");

                        if($exist_new[$i]->num_rows() == 0 ) {

                            if ($en_date > $st_date) {
                                // end date must greater than start date
                                $room_query = $this->db->query("select room_code  from rooms 
			 							 where    room_code not in(
			 							      select res_room_code from 
			 							      reservations 
			 							      where ( res_time_end   >= '".$en_date."'
                                                        and   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        and   res_time_start <=  '".$st_date."' )
			 							      and res_todate = '" . $dates[$i] . "' )    limit 1 ")->row();

                                if ($room_query->room_code > 0) // there is room code
                                {
                                    $exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
                                             where    
                                                   res_teach_code = "' . $teachvalhid . '"
                                             and   res_room_code  = "' . $room_query->room_code . '"
                                             and   res_std_code   = "' . $stdvalhid . '"
                                             and   res_todate	  = "' . $dates[$i] . '"');

                                    if ($exist_r->num_rows() > 0) {
                                        $arr = array(
                                            "res_teach_code" => $teachvalhid,
                                            "res_std_code" => $stdvalhid,
                                            "res_cors_code" => $corsvalhid,
                                            "res_todate" => date("Y-m-d",strtotime($dates[$i])),
                                            "res_room_code" => $room_query->room_code,
                                            "res_time_start" => date('Y-m-d H:i', strtotime($dates_ST[$i])),
                                            "res_time_end" => date('Y-m-d H:i', strtotime($dates_ND[$i])),
                                            "res_paid_price" => $ppricevalhid,
                                            "res_admin_note" => $res_admin_noteRepeat[$i],
                                            "res_teacher_percent" => $teachpercentvalhid,
                                            "res_is_confirmed" => 0
                                        );


                                        $doo = $this->db->insert("reservations", $arr);
                                        $_SESSION["inserted_row"][$i] = 1;
                                    }
                                }
                                else {$no_room = 1;}
                            }
                            else
                            {
                                $big_date = 1;
                                $dates = $en_date . " < " . $st_date;
                            }
                        }
                        else
                        {
                            $existance++;
                            if($existance == 1)
                                echo $this->lang->line('reserv_exist');
                        }
                    }
                    else{
                        if ($en_date > $st_date)
                        {
                            $exist_new[$i] = $this->db->query("select * from reservations 
                                             where    ( res_time_end   >= '".$en_date."'
                                                        and   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        and   res_time_start <=  '".$st_date."' )
                                               and     res_teach_code = '".$teachvalhid."'
                                               and   res_std_code   = '".$stdvalhid."'
                                               and   res_cors_code   = '".$corsvalhid."'
                                               and   res_todate	  = '".$dates[$i]."'");

                            if($exist_new[$i]->num_rows() == 0 ) {
                                // end date must greater than start date
                                $room_query = $this->db->query("select room_code  from rooms 
			 							 where    room_code not in(
			 							      select res_room_code from 
			 							      reservations 
			 							      where ( res_time_end   >= '".$en_date."'
                                                        and   res_time_end >=  '".$st_date."' )
                                                    and 
                                                    ( res_time_start   <= '".$en_date."'
                                                        and   res_time_start <=  '".$st_date."' )
			 							      and res_todate = '" . $dates[$i] . "' )   limit 1 ")->row();

                                if ($room_query->room_code > 0) // there is room code
                                {
                                    $exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
                                             where    
                                                   res_teach_code = "' . $teachvalhid . '"
                                             and   res_room_code  = "' . $room_query->room_code . '"
                                             and   res_std_code   = "' . $stdvalhid . '"
                                             and   res_todate	  = "' . $dates[$i] . '"');

                                    if ($exist_r->num_rows() > 0) {
                                        $arr = array(
                                            "res_teach_code" => $teachvalhid,
                                            "res_std_code" => $stdvalhid,
                                            "res_cors_code" => date("Y-m-d",strtotime($dates[$i])),
                                            "res_todate" => $dates[$i],
                                            "res_room_code" => $room_query->room_code,
                                            "res_time_start" => date('Y-m-d H:i', strtotime($dates_ST[$i])),
                                            "res_time_end" => date('Y-m-d H:i', strtotime($dates_ND[$i])),
                                            "res_paid_price" => $ppricevalhid,
                                            "res_admin_note" => $res_admin_noteRepeat[$i],
                                            "res_teacher_percent" => $teachpercentvalhid,
                                            "res_is_confirmed" => 0
                                        );


                                        $doo = $this->db->insert("reservations", $arr);
                                        $_SESSION["inserted_row"][$i] = 1;
                                    }
                                } else {
                                    $no_room = 1;
                                }
                            }
                            else
                            {
                                $existance++;
                                if($existance == 1)
                                    echo $this->lang->line('reserv_exist');
                            }
                        }
                        else {
                            $big_date = 1;
                            $dates [] = $en_date . " < " . $st_date ;
                        }
                    }
                }

                if($no_room == 1 )
                    echo "لايوجد غرف متاحة";
                if($big_date == 1 ){
                    echo "لايمكن ان يكون تاريخ الانتهاء اقل من تاريخ البداية ";
                    print_r($dates);
                }
                if($doo)
                {
                    if($existance == 0)
                        echo "تمت عملية الحجز بنجاح " ;

                }
            }

        }
        public function check_existance()
        {
            extract($_POST);
if(!empty($todates))
    $res_todate = date('Y-m-d',strtotime($todates));
else
    $res_todate = date();
            $st_date_obj = new DateTime(date('Y-m-d H:i', strtotime($time_start)));
            $en_date_obj = new DateTime(date('Y-m-d H:i', strtotime($time_end)));

            $st_date = $st_date_obj->format("Y-m-d H:i");
            $en_date = $en_date_obj->format("Y-m-d H:i");

            $st_clock = $st_date_obj->format("H:i");
            $en_clock = $en_date_obj->format("H:i");
            if ($en_date > $st_date) {
                $exist_new_std = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '" . $en_date . "'
                                                   or   res_time_start <=  '" . $st_date . "') 
                                              and 
                                                  (res_time_end   >= '" . $en_date . "'
                                                   or   res_time_end >=  '" . $st_date . "' )
                                             and res_std_code   = '" . $student_id . "'
                                             and   res_todate	  = '" . $res_todate . "'");

                $exist_new_tech = $this->db->query("select * from reservations 
                                             where  (  res_time_start   <= '" . $en_date . "'
                                                   or   res_time_start <=  '" . $st_date . "') 
                                             and 
                                             ( res_time_end   >= '" . $en_date . "'
                                             or   res_time_end >=  '" . $st_date . "' )
                                             
                                             and res_teach_code   = '" . $teach_code . "'
                                             and   res_todate	  = '" . $res_todate . "'");

                if ($exist_new_std->num_rows() == 0 && $exist_new_tech->num_rows() == 0) {
                    echo "0╩";
                    echo " " . "╩"; // nodata
                    echo "#fff╦#434A54"; // color;
                } else {
                    echo "1╩";
                    $get_exists = $this->db->query("select * 
                                                from reservations,rooms,students,teachers,courses
                                                where  (  res_time_start   <= '" . $en_date . "'
                                                   or   res_time_start <=  '" . $st_date . "') 
                                             and 
                                             ( res_time_end   >= '" . $en_date . "'
                                             or   res_time_end >=  '" . $st_date . "' )
                                                
                                               and  res_std_code = st_code
                                                and   res_cors_code = c_code
                                                and   res_teach_code = te_code 
                                                and   res_room_code = room_code 
                                                and   res_todate = '" . $res_todate . "'")->result();

                    foreach ($get_exists as $get_exist) {
                        echo "<div class='row'>
                        <div class='col-md-6'>اسم الطالب</div>
                        <div class='col-md-6'>" . $get_exist->st_name . "</div>
                        <div class='col-md-6'>اسم المعلم</div>
                        <div class='col-md-6'>" . $get_exist->te_name . "</div>
                        <div class='col-md-6'>اسم المادة</div>
                        <div class='col-md-6'>" . $get_exist->c_name . "</div>
                        <div class='col-md-6'>وقت البدء</div>
                        <div class='col-md-6'>" . $get_exist->res_time_start . "</div>
                        <div class='col-md-6'>وقت الانتهاء</div>
                        <div class='col-md-6'>" . $get_exist->res_time_end . "</div>
                        <div class='col-md-6'>رقم الغرفة</div>
                        <div class='col-md-6'>" . $get_exist->room_name . "</div>
                        <div class='col-md-3'>ملاحظة المدير</div>
                        <div class='col-md-9'>" . $get_exist->res_admin_note . "</div>
                      </div><hr/>";
                    }
                    echo "╩#f00╦#fff";
                }
            }
            else
            {
                    echo "-1╩".$this->lang->line('illagal_endDate').'╩#fff╦#434A54';
            }
        }
	    public function AddEdit_GRreserv()///////////////////////////////////////////////////
		{
			extract($_POST);
 			if(!isset($user_edit_moad))
			{
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
				
			}
			
		
			 if($curr_code == '' || $curr_code == NULL)
			 {
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
			 
 			 
 			for($i=0; $i<=count($res_std_code)-1;$i++)
			{
				$exist_r = $this->db->query('select MAX(res_time_end) en_date from reservations 
			 							 where    
										     res_teach_code = "'.$res_teach_code.'"
										 and   res_room_code = "'.$res_room_code.'"
										 and   res_std_code = "'.$res_std_code[$i].'"
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
				 		  "res_std_code"=>$res_std_code[$i] , 
				 		  "res_cors_code"=>$res_cors_code , 
				 		  "res_todate"=>date('Y-m-d') , 
				 		  "res_room_code"=>$res_room_code , 
				 		  "res_time_start"=>date('Y-m-d H:i',strtotime($res_time_start)) , 
				 		  "res_time_end"=>  date('Y-m-d H:i',strtotime($res_time_end)) , 
				 		  "res_paid_price"=>$res_paid_price , 
				 		  "res_admin_note"=>$res_admin_note , 
				 		 // "res_teach_note"=>$res_teach_note , 
				 		  "res_teacher_percent"=>$res_teacher_percent , 
				 		  "res_is_confirmed"=>$res_is_confirmed  
				         ) ;
				 
				  
 				 $doo = $this->db->insert("reservations",$arr);
				 //$thisid =  $this->db->insert_id();   
			  }
			 } 
			 else
			 {
               if($this->session->userdata('User_type') == 2) // .. Teacher .. //
			   {
				   if(empty($res_teach_note) || $res_teach_note == '')
					{
					  echo $this->lang->line("required").$this->lang->line("res_teach_note");
					  exit();
					}
				   $arr = array(  
				 		  "res_teach_note"=>$res_teach_note , 
				 		  "res_is_confirmed"=>$res_is_confirmed  
				         ) ;
				   
 			   }
				elseif($this->session->userdata('User_type') == 1)// .. Admin .. //
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
				 		  "res_admin_note"=>$res_admin_note , 
				 		  "res_teach_note"=>$res_teach_note , 
				 		  "res_teacher_percent"=>$res_teacher_percent , 
				 		  "res_is_confirmed"=>$res_is_confirmed  
				         ) ;
				}
				   
				
 			 $pk = $curr_code;
			 $this->db->where("res_code",$curr_code);
			 $doo = $this->db->update("reservations",$arr);
			   	
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
	    public function view_reserv()
		{
			$data["page_title"] = $this->lang->line("view_all_reserv");
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
			
			$this->load->view('cp/templates/header',$data);
			$this->load->view('cp/reserv_table_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
	    public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
	}



?>