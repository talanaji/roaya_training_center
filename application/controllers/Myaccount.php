<?php class Myaccount extends MY_Controller
	  {
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("pMy_account");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/my_account_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function update_changes()
		{
			extract($_POST);
 			
	       $this->db->where("u_code",$u_code);
		   $curr_user = $this->db->get("users")->row();
		   if(!empty($u_password))
		    {
				$arr = array("u_username" => $u_username ,
			              "u_fname" => $u_fname ,
			              "u_password" => md5($u_password) ,
			              "u_sex" => $u_sex ,
						  "u_email" => $u_sex ,
			              "u_birthday" => $u_birthday ,
			              "u_address" => $u_address  
			              );
				}
				  else
				  {
					  $arr = array("u_username" => $u_username ,
			              "u_fname" => $u_fname ,
						  "u_email" => $u_email ,
			              "u_sex" => $u_sex ,
			              "u_birthday" => $u_birthday ,
			              "u_address" => $u_address  
			              );
				  }
				   $arrsess = array(
 					"User_fullname" => $u_fname ,
					"User_email" => $u_email ,
 					"User_birthday" => $u_birthday,
					"User_address" => $u_address,
					"User_sex" => $u_sex ,
					"User_scr_priv" =>$curr_user->u_scr_priv,
					"User_btn_priv" =>$curr_user->u_btn_priv
  				   );
				   $this->session->set_userdata($arrsess); 
				$this->db->where("u_code",$u_code);
			    $this->db->update("users",$arr);
				redirect('Myaccount');
				
 	  		}
        public function options()
        {
            $data["page_title"] = $this->lang->line("website_settings");
            if(isset($_POST["btn_submit"]))
            {
                extract($_POST);
                extract($_FILES);
                $imgg = '';
               if($notify_is_recieves == 'on')
                   $notify_is_recieves = 1;
               else
                   $notify_is_recieves= 0;

                if(!empty($op_logo["name"]))
                     $imgg = $this->doUpload("op_logo", LOGO_PATH, $op_logo["name"], "all");


                $arr = array(
                   "op_title"=>$op_title,
                   "op_desc"=> $op_desc,
                   "op_keyword"=>$op_keyword ,
                   "op_facebook_link"=>$op_facebook_link ,
                   "op_twitter_link"=>$op_twitter_link ,
                   "op_youtube_link"=>$op_youtube_link ,
                   "op_password_msg"=>nl2br($op_password_msg) ,
                   "op_register_msg"=>nl2br($op_register_msg) ,
                   "op_regtraining_msg"=>nl2br($op_regtraining_msg) ,
                   "op_admin_email"=>$op_admin_email ,

                    "SMS_username"=>$SMS_username ,
                    "SMS_password"=>$SMS_password ,
                    "SMS_accid"=>$SMS_accid ,
                    "SMS_sysPW"=>$SMS_sysPW ,
                    "notify_is_recieves"=>$notify_is_recieves,


                   "op_logo"=>$imgg
                );

                if($imgg == '')
                    unset($arr["op_logo"]);

                if($op_code == '' || empty($op_code))
                {
                    $this->db->insert("options", $arr);
                    redirect("Myaccount/options");
                }
                else
                {
                    $this->db->where("op_code" , $op_code);
                    $this->db->update("options", $arr);
                    redirect("Myaccount/options");
                }
            }
            $this->load->view('cp/templates/header',$data);
            $this->load->view('cp/website_settings_vw',$data);
            $this->load->view('cp/templates/footer',$data);

        }
	  } 
	
?>