<?php 
	class Students_ci extends MY_Controller
	{ 
		public function index()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("students_managment");

		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/students_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
  		public function AddEdit_student()
		{
			extract($_POST);

           if(empty($st_ID) || $st_ID == '')
           {
                echo $this->lang->line("required").$this->lang->line("st_ID");
           exit();
           }
 			if(empty($st_school_code) || $st_school_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
			if(empty($st_name) || $st_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_name");
			  exit();
		    }
			if(empty($st_class) || $st_class == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_class");
			  exit();
		    }
			if(empty($st_ID) || $st_ID == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_class");
			  exit();
		    }

 			if(empty($st_sex) || $st_sex == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_sex");
			  exit();
		    }

            if(empty($std_visitor)) {
                if (empty($st_sub_code) || $st_sub_code == '') {
                    echo $this->lang->line("required") . $this->lang->line("sub_name");
                    exit();
                }

                if (empty($st_paymentmethods_code) || $st_paymentmethods_code == '') {
                    echo $this->lang->line("required") . $this->lang->line("st_paymentmethods_code");
                    exit();
                }
            }

			if($st_active ==  '1' || $st_active ==  'on')
				$ac = 1;
			else
				$ac = 0;

			 if($curr_code == '' || $curr_code == NULL){
                // if (redundancy_where_value_s("students", "st_email", $st_email, ' or st_ID ="'.$st_ID.'"') > 0) {
                    
                 //    echo " الطالب مسجل مسجل لدينا من قبل ";
                 //    exit;
                // }
		 		$arr = array( 
				 		  "st_name"=>$this->input->post('st_name',true) ,
				 		  "st_reg_date"=>date("Y-m-d H:i") , 
				 		  "st_school_code"=>$this->input->post('st_school_code',true) ,
				 		  "st_class"=>$this->input->post('st_class',true) ,
				 		  "st_phone1"=>$this->input->post('st_phone1',true) ,
				 		  "st_phone2"=>$this->input->post('st_phone2',true),
				 		  "st_ID"=>$this->input->post('st_ID',true) ,
                          "st_password"=>md5($this->input->post('st_ID',true)) ,
                          "st_password2"=>base64_encode($this->input->post('st_ID',true)) ,
				 		  "st_email"=>$this->input->post('st_email',true) ,
				 		  "st_town"=>$this->input->post('st_town',true) ,
				 		  "st_sex"=>$this->input->post('st_sex',true) ,
				 		  "st_birthdate"=>date('Y-m-d',strtotime($this->input->post('st_birthdate',true))) ,
				 		  "st_sub_code"=>$this->input->post('st_sub_code',true) ,
				 		//  "st_price"=>$st_price , 
				 		  "st_active"=>$ac ,
				 		  "st_paymentmethods_code"=>$this->input->post('st_paymentmethods_code',true)  ,
				 		  "st_status_code"=>$this->input->post('st_status_code',true) ,
				 		  "st_payment_date"=>$this->input->post('st_payment_date',true) ) ;
				 
				  
 				 $doo = $this->db->insert("students",$arr);
				 $thisid =  $this->db->insert_id();
				
 				$this->upload_doc( "docs", $this->config->item( 'IMAGE_FOLDER' ), STUDENT_DOCS_PRIFIX,  $thisid, $arr[ "st_name" ], 0, 1 );
			
                 $this->upload_photo("file" , $this->config->item('IMAGE_FOLDER') ,STUDENT_PRIFIX, $thisid , $arr["st_name"] , 0 , 1 );
			 } 
			else
			{
               // if (redundancy_where_value_s("students", "(st_email", $st_email, ' or st_ID ="'.$st_ID.'") and st_code <> '.$curr_code) > 0) {
               //     echo " الطالب مسجل مسجل لدينا من قبل ";
                //    exit;
                //}

				$arr = array(
                    "st_name"=>$this->input->post('st_name',true) ,
                     "st_school_code"=>$this->input->post('st_school_code',true) ,
                    "st_class"=>$this->input->post('st_class',true) ,
                    "st_phone1"=>$this->input->post('st_phone1',true) ,
                    "st_phone2"=>$this->input->post('st_phone2',true),
                    "st_ID"=>$this->input->post('st_ID',true) ,
                    "st_email"=>$this->input->post('st_email',true) ,
				 		  "st_town"=>$st_town ,
                           "st_password"=>md5($st_password),
                          "st_password2"=>base64_encode($st_password) ,
                    "st_sex"=>$this->input->post('st_sex',true) ,
                    "st_birthdate"=>date('Y-m-d',strtotime($this->input->post('st_birthdate',true))) ,
                    "st_sub_code"=>$this->input->post('st_sub_code',true) ,
				 		  "st_active"=>$ac ,
                    "st_paymentmethods_code"=>$this->input->post('st_paymentmethods_code',true)  ,
                    "st_status_code"=>$this->input->post('st_status_code',true) ,
                    "st_payment_date"=>$this->input->post('st_payment_date',true)) ;

 			 if(isset($_FILES['file']["name"]))
			  {
				  $this->upload_photo("file" , $this->config->item('IMAGE_FOLDER'),STUDENT_PRIFIX , $curr_code , $arr["st_name"] , 0 , 1 );
			  }
			  if ( isset( $_FILES[ 'docs' ][ "name" ] ) ) {
 					$this->upload_doc( "docs", $this->config->item( 'IMAGE_FOLDER' ), STUDENT_DOCS_PRIFIX,  $thisid, $arr[ "st_name" ], 0, 1 );
			}
			 $pk = $curr_code;
			 $this->db->where("st_code",$pk);
			 $doo = $this->db->update("students",$arr);
				
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
  		public function AddEdit_student_vis()
		{
			extract($_POST);
            if(empty($st_ID) || $st_ID == '')
            {
                echo $this->lang->line("required").$this->lang->line("st_ID");
                exit();
            }
 			if(empty($st_school_code) || $st_school_code == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("sc_name");
			  exit();
		    }
			if(empty($st_name) || $st_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_name");
			  exit();
		    }

			if(empty($st_password) || $st_password == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_password");
			  exit();
		    }

 			if(empty($st_sex) || $st_sex == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("st_sex");
			  exit();
		    }
 				$ac = 0;
 			 if($curr_code == '' || $curr_code == NULL){
                   if (redundancy_where_value_s("students", "st_email", $st_email, ' or st_ID ="'.$st_ID.'"') > 0) {
                     echo " الطالب مسجل مسجل لدينا من قبل ";
                     exit;
                 }
		 		$arr = array(
				 		  "st_name"=>$this->input->post('st_name',true) ,
				 		  "st_password"=>md5($this->input->post('st_password',true)) ,
				 		  "st_password2"=>base64_encode($this->input->post('st_password',true)) ,
				 		  "st_reg_date"=>date("Y-m-d H:i") ,
				 		  "st_school_code"=>$this->input->post('st_school_code',true) ,
 				 		  "st_phone1"=>$this->input->post('st_phone1',true) ,
				 		  "st_phone2"=>$this->input->post('st_phone2',true),
				 		  "st_ID"=>$this->input->post('st_ID',true) ,
				 		  "st_email"=>$this->input->post('st_email',true) ,
				 		  "st_town"=>$this->input->post('st_town',true) ,
				 		  "st_sex"=>$this->input->post('st_sex',true) ,
				 		  "st_birthdate"=>date('Y-m-d',strtotime($this->input->post('st_birthdate',true))) ,
 				 		  "st_active"=>$ac   ) ;


 				 $doo = $this->db->insert("students",$arr);
				 $thisid =  $this->db->insert_id();

				 $this->upload_photo("file" , $this->config->item('IMAGE_FOLDER') ,STUDENT_PRIFIX, $thisid , $arr["st_name"] , 0 , 1 );





             }

			 if($doo)
				{

                    if($this->send_mail_center("msg_views/password_msg",
                        $this->options->op_register_msg ,
                        $this->options->op_admin_email ,
                        $this->input->post('st_email',true),
                        $this->options->op_title,
                        $this->lang->line('email_title'),
                        $this->input->post('st_name',true),
                        $this->input->post('st_email',true),
                        $this->input->post('st_password',true)
                    ))
                        echo "done";
                    else
                        echo "Faild";
                     //echo  $this->lang->line('alert_success');
//                    $this->send_mail_center("msg_views/password_msg",
//                        $this->options->op_register_msg ,
//                        "admin@admin.com" ,
//                        $this->options->op_admin_email,
//                        $this->options->op_title,
//                        $this->lang->line('email_title'),
//                        $this->input->post('st_name',true),
//                        $this->input->post('st_email',true),
//                        $this->input->post('st_password',true)
//                    );
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
				  
				
				 if($dd->$chbox == 1)
					
					 $ac = "<span class='tag tag-success'>".$this->lang->line('active')."</span>";
					
				 else $ac = "<span class='tag tag-danger'>".$this->lang->line('Inactive')."</span>" ;
				 echo "<tr>  
 			           <td>".$dd->$txt."</td>
					   <td>".$dd->st_ID."</td>
							<td>".$dd->st_phone1."</td>
							<td>".$dd->st_class."</td>
							<td>".$ac."</td>
 						<td>
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
								st_password2= '".base64_decode($dd->st_password2)."'
								st_payment_date= '".$dd->st_payment_date."'>
								<button type='button' class='btn btn-icon btn-sm box_shadow' title='تعديل'><i class='fa fa-pencil-square-o'></i></button>
									</a>
					<a href='Students_ci/st_profile/".$dd->$primary_key."' style='cursor:pointer' class='profile'   title='".$dd->$primary_key."' ><button type='button' class='btn btn-icon btn-sm box_shadow' title='عرض'><i class='fa fa-eye '></i></button></a>
				<a  class='Del' title='".$dd->$primary_key."'><button type='button' class='btn btn-icon btn-sm box_shadow' title='View'><i class='fa fa-trash-o text-danger'></i></button></a></td>
					         </tr>";
 			 }
		 }
	    public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
        public function send_password()
        {
            extract($_POST);
            if($this->send_mail_center("msg_views/password_msg",
                                        $this->options->op_password_msg,
                                        $email_from,
                                        $email_to,
                                        $email_name,
                                        $email_subject,
                                        $email_msg_vals)) {
                echo "done";
                /*********insert into std msgs table *************/
                $this->add_std_notify($curr_codepost,str_replace("{var1}",$email_msg_vals,$this->options->op_password_msg),'email',$this->session->userdata('User_code'),'admin',1);
                /********************end insert ***********/
            }
            else
                echo "Faild";
        }
        public function send_mobile()
        {
            extract($_POST);

            $un = $this->options->SMS_username ;//"as3ad.mansour@gmail.com";
            $pw = $this->options->SMS_password ;//"y9ZBmw";
            $accid = $this->options->SMS_accid ;//"4185";
            $sysPW = $this->options->SMS_sysPW ;//"itnewslettrSMS";
            $t = date("Y-m-d H:i:s");

            /* ---------------------  */
            /* send SMS to recipients */
            /* ---------------------  */
            try
            {
                $ini = ini_set("soap.wsdl_cache_enabled","0");
                $client = new SoapClient("http://api.itnewsletter.co.il/webServices/WebServiceSMS.asmx?wsdl");

                $params = array();
                $params["un"] = $un;
                $params["pw"] = $pw;
                $params["accid"] = $accid;
                $params["sysPW"] = $sysPW;
                $params["t"] = $t;

                $params["txtUserCellular"] = "0512345678";
                $params["destination"] = $mobile_msg_vals;//0512345678
                $params["txtSMSmessage"] = str_replace("{var1}",$password_vals,$this->options->op_password_msg);
                $params["dteToDeliver"] = "";
                $params["txtAddInf"] = "LocalMessageID";
                $result = $client->sendSmsToRecipients($params)->sendSmsToRecipientsResult;

                /*********insert into std msgs table *************/
                 $this->add_std_notify($curr_codepost,str_replace("{var1}",$password_vals,$this->options->op_password_msg),'mobile',$this->session->userdata('User_code'),'admin',1);
                 /********************end insert ***********/
               echo $result;
            }

            catch (Exception $e)
            {
                echo $e;
            }
        }
		public function st_profile($edit_moad=NULL)
		{
			if($this->is_logged != 1)
			    redirect("login");
			$data["page_title"] = $this->lang->line("students_managment");
 			/********* General Information Student ***************/
			$this->db->where("st_code",$edit_moad);
			$cu = $this->db->get("students")->row();
 			$ph = $this->db->query("select * from subject_photos , photos where subject_photos.photo_id = photos.P_code 
                                    and is_main = 1 
                                    and Rcu_id = '".$cu->st_code."'
                                   and  prefix_type = '".STUDENT_PRIFIX."'
                                   and  S_active = 1   ")->row();

			$data["st_name"] = $cu->st_name;
			$data["st_code"] = $cu->st_code;
            $data["st_SMS_sub"] = $cu->st_SMS_sub;
			$data["st_email"] = $cu->st_email;
			$data["st_password"] = $cu->st_password;
			$data["st_password2"] = $cu->st_password2;
			$data["st_reg_date"] = $cu->st_reg_date;
			$data["st_school_code"] = $cu->st_school_code;
			$data["st_class"] = $cu->st_class;
			$data["st_email"] = $cu->st_email;
			$data["st_town"] = $cu->st_town;
			$data["st_sex"] = $cu->st_sex;
			$data["st_birthdate"] = $cu->st_birthdate;
			$data["st_sub_code"] = $cu->st_sub_code;
			$data["st_price"] = $cu->st_price;
			$data["st_paymentmethods_code"] = $cu->st_paymentmethods_code;
			$data["st_status_code"] = $cu->st_status_code;
			$data["st_payment_date"] = $cu->st_payment_date;
			$data["st_active"] = $cu->st_active;
			$data["st_ID"] = $cu->st_ID;
			$data["st_phone1"] = $cu->st_phone1;
			$data["st_phone2"] = $cu->st_phone2;
            $data["st_photo"] = $ph->P_photo;
			
			/************Reservation Information for this student ************************/
            if($this->session->userdata('User_type') == 2 ) //Teacher
            {
                $table_join = " , users ";
                $where_join = " and teachers.te_ID = users.u_ID
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
							 and   res_room_code = room_code ".$where_join."
							 and   res_std_code = '".$cu->st_code."'
							 and   res_is_confirmed = 1
							 order by res_code desc ")->result();

            if( $this->get_users_btnprivs(13,$this->session->userdata('User_code'),$this->session->userdata('User_type')) > 0 || $this->session->userdata('User_type')==1)
                $data["btn_res_edit"] = 1 ;

            /*****************Payments for this student ********************************/
            $data["ddd"] = $this->db->query("select * from students, payments,payment_methods 
                                              where payments.m_code =payment_methods.m_code 
                                              and   payments.st_code=students.st_code 
                                              and students.st_code= '".$cu->st_code."'")->result();
            /*****************End Payments for this student ********************************/

            /*****************Count and msgs of student msgs of mobile  ********************************/

            $data["all_msg_count"] = $this->db->query("select count(*) ct from students_notfications,students
                                                where students_notfications.stdn_st_code = students.st_code 
                                                and students_notfications.stdn_st_code = '".$cu->st_code."'
                                                and students_notfications.stdn_send_type ='mobile'")->row();

            $data["std_msgs"] = $this->db->query("select * from students_notfications,students
                                                where students_notfications.stdn_st_code = students.st_code 
                                                and students_notfications.stdn_st_code = '".$cu->st_code."'")->result();
            /*****************End Count and msgs of student msgs of mobile  ********************************/

            $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/st_profile',$data);
			$this->load->view('cp/templates/footer',$data);
		}
        public function SMS_sub_update()
        {
            extract($_POST);
            $this->db->where("st_code" , $codepost);
            $this->db->update("students",array("st_SMS_sub"=>$chkpost));

            if($chkpost == 1 )
                echo $this->lang->line('subs_done');
            else
                echo $this->lang->line('subs_not_done');
        }
		public function filter_res()
        {
            extract($_POST);
            $table_join = "";
            $where_join = "";

            if(!empty($res_teach_codepost))
                $where_join .= " and te_code= ".$res_teach_codepost;
            if(!empty($df_postf))
                $where_join .= " and res_todate >= ".$df_postf;
            if(!empty($df_postt))
                $where_join .= " and res_todate <= ".$df_postt;

            $d = $this->db->query("select * from 
									reservations , 
									teachers , 
									students , 
									rooms, courses ".$table_join."
			                 where res_teach_code = te_code 
							 and   res_std_code = st_code  
							 and   res_cors_code = c_code  
							 and   res_room_code = room_code ".$where_join."
							   and   res_std_code = '".$st_codepost."'
							 and   res_is_confirmed = 1
							 
							 order by res_code desc ")->result();

             foreach($d as  $dd )
            {
                $this->db->select('color');
                $this->db->from('reservation_status');
                $this->db->where('rest_code',$dd->res_is_confirmed);
                $q = $this->db->get()->row()->color;
                //echo $q ;
                $sum2 = 0;
                $starttimestamp = StrToTime($dd->res_time_start);
                $endtimestamp =  StrToTime($dd->res_time_end);
                $diff=$endtimestamp - $starttimestamp;
                $difference = $diff / ( 60 * 60 );

                //$difference  = $dd->res_time_start;


            echo "<tr class='".$q."'>";
                    echo "<td>";
                   echo " ".$dd->st_name."</td>
                    <td>".$dd->te_name."</td>
                    <td>".$dd->c_name."</td>
                    <td>".$dd->room_name."</td>
                    <td>".$dd->res_todate."</td>
                    <td>".$dd->res_time_start."</td>
                    <td>".$dd->res_time_end."</td>";
                if ($this->session->userdata('User_type') == 1)
                {
                    echo "<td>".$dd->res_paid_price."</td>";
                }

                echo "  <td>".$dd->res_teacher_percent."</td>" ;
                echo "  <td>". $difference."</td>" ;
                echo "
	         </tr>";
            }
         }
        public function filter_payments()
        {
            extract($_POST);
            $where_join = '';
            if(!empty($df_postf))
                $where_join .= " and p_date >= ".$df_postf;
            if(!empty($df_postt))
                $where_join .= " and p_date <= ".$df_postt;
            $ddd = $this->db->query("select * from students, payments,payment_methods 
                                              where payments.m_code =payment_methods.m_code 
                                              and   payments.st_code=students.st_code 
                                              and students.st_code= '".$st_codepost."' ".$where_join)->result();
            foreach($ddd as   $dd )
            {
               echo "<tr title=''>".
                    "<td>".$dd->st_name."</td>
                    <td>".$dd->p_date."</td>
                    <td>".$dd->m_name."</td>
                    <td>".$dd->amount."</td>
                    <td>".$dd->info."</td>
                </tr>";
             }
        }
		
		
	public function get_items_ser()
	{  
 	 $where  = " where 1=1 ";
      extract($_POST);

	if (!empty($ser_name_st))
	{ 
		$where .= " and st_name  LIKE  '%".urldecode($ser_name_st)."%'";
		 
	   }
	 if(!empty($ser_id_st ))
	   {
	 
	      $where .=" and st_ID  = '".$ser_id_st."'";
 
	   }
	if(!empty($ser_phone_st))
	   {
			$where .=" and  st_phone1  = '".$ser_phone_st."'";
		
	   }
	   if(!empty($ser_bir_st))
	   {
			$where .="  and  st_birthdate ='".date("Y-m-d",strtotime($ser_bir_st))."'";
		
	   }
       echo  "select * from students  ".$where;exit;
  	 $d = $this->db->query("select * from students  ".$where)->result();
							  
 			//تمام خيو ؟ اسمع انا هلا بس بدي اوصل مشوار وبشوفك بالليل وبدي اصلي العصر كمان لانو نسيت اصليه ههههه بشوفك بس تليل الدنيا تمام خيو هي البحث خلصتها الك 
			 
    		 foreach($d as  $key=>$dd )
			 {
				 if($dd->st_active == 1)
					
					 $ac = "<span class='tag tag-success'>".$this->lang->line('active')."</span>";
					
				 else $ac = "<span class='tag tag-danger'>".$this->lang->line('Inactive')."</span>" ;
				 echo "<tr>  
 			           <td>".$dd->st_name."</td>
					   <td>".$dd->st_ID."</td>
							<td>".$dd->st_phone1."</td>
							<td>".$dd->st_class."</td>
							<td>".$ac."</td>
 						<td>
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
								st_password2= '".base64_decode($dd->st_password2)."'
								st_payment_date= '".$dd->st_payment_date."'>
								<button type='button' class='btn btn-icon btn-sm box_shadow' title='تعديل'><i class='fa fa-pencil-square-o'></i></button>
									</a>
					<a href='Students_ci/st_profile/".$dd->$primary_key."' style='cursor:pointer' class='profile'   title='".$dd->$primary_key."' ><button type='button' class='btn btn-icon btn-sm box_shadow' title='عرض'><i class='fa fa-eye '></i></button></a>
				<a  class='Del' title='".$dd->$primary_key."'><button type='button' class='btn btn-icon btn-sm box_shadow' title='View'><i class='fa fa-trash-o text-danger'></i></button></a></td>
					         </tr>";
 			 }
		 }

 	}
?>