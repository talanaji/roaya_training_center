<?php 
	class Login extends CI_Controller
	  {
		 

		public function __construct()
		{
			parent::__construct();
			error_reporting(0);
			$this->lang->load("cperm","arabic");
		  $this->load->library('toastr');
		}
		public function index()
		{
			$this->load->view("cp/login");
		}

		 public function auth()
		 {
			
            extract($_POST);
  			if(!empty($email) && !empty($password))
			{	
			  if($choose_lang == "arabic") 
			  {
				  $this->lang->load("cperm","arabic");
 				  $lang_sess = "arabic";	
			  }
			  elseif($choose_lang == "arabic")
			  {
				  $this->lang->load("cperm","arabic");
				  $lang_sess = "portg"; //$this->session->set_userdata('lang',"");
			  }
				$this->db->where("u_active" , 1);
				$this->db->where("u_username",$email);
				$this->db->where("u_password",md5($password));
  		   		$query = $this->db->get("users");

			   if($query -> num_rows() == 1)
			   {
			       $r = $query->result() ;
				  if($r[0]->u_active == 1 ){
 				   $arr = array(
				   	"User_code" => $r[0]->u_code , 
					"User_name" => $r[0]->u_username , 
					"User_fullname" => $r[0]->u_fname ,
					"User_email" => $r[0]->u_email ,
					"User_type" => $r[0]->u_type,
					"User_birthday" => $r[0]->u_birthday,
					"User_address" => $r[0]->u_address,
					"User_sex" => $r[0]->u_sex,
					"User_scr_priv" => $r[0]->u_scr_priv,
					"User_btn_priv" => $r[0]->u_btn_priv,
					"lang"  => $lang_sess
  				   );
				   $this->session->set_userdata($arr);
                      if(strtolower($email) == 'tv' )
                      {
                          redirect("Tv_ci");
                      }
				    redirect("Home");
				  }
				  else
			       $data["err"] = $this->lang->line('inactive_user');
                  $this->toastr->error($data["err"]);
				  
  			   }
			   else
			   {
				      
                 
				   $data["title"]  = $this->lang->line('Login_page_admin_control_panel');
				   $data["err"] = $this->lang->line('error_username_or_password');
                   $this->toastr->error($data["err"]);
				   $this->load->view('cp/login' , $data);
 				   return false;
			   }
			}
			else
			{
				
				redirect("login");
			}
     	  }
         public function logout()
         {
              $this->session->sess_destroy();
              redirect("login");
         }
         public function logout_std()
         {
            $this->session->sess_destroy();
            redirect("login/login_std");
         }
         //---------

        public function login_std()
        {
            $data["page_title"] = $this->lang->line("std_login");
            if(!empty($this->session->userdata('st_code')))
                redirect("Std_dashboard");
            switch($this->session->userdata('lang'))
            {
                case 'portg':$this->lang->load("cperm","portuguese");break;
                case 'arabic':$this->lang->load("cperm","arabic");break;
                default:
                    if($this->session->userdata('lang') !='')
                    {
                        $this->session->sess_destroy();
                        redirect("login");
                    }
                    else
                    {
                        $this->lang->load("cperm","arabic");
                    }
                    break;
            }
             if(isset($_POST["btn_login"]))
             {
                 extract($_POST);
                 if(!empty($st_email) && !empty($st_password))
                 {
                      $this->db->where("st_active" , 1);
                     $this->db->where("st_email",$st_email);
                     $this->db->where("st_password",md5($st_password));
                     $query = $this->db->get("students");
                       if($query -> num_rows() > 0)
                      {
                          $r = $query->result() ;
                         if($r[0]->st_active == 1 ){
                             $arr = array(
                                 "st_code" => $r[0]->st_code ,
                                 "st_name" => $r[0]->st_name ,
                                 "st_school_code" => $r[0]->st_school_code ,
                                 "st_class" => $r[0]->st_class ,
                                 "st_email" => $r[0]->st_email,
                                 "st_sex" => $r[0]->st_sex,
                                 "st_birthdate" => $r[0]->st_birthdate,
                                 "st_ID" => $r[0]->st_ID,
                                 "st_phone1" => $r[0]->st_phone1,
                                 "st_phone2" => $r[0]->st_phone2,
                                 "st_town" => $r[0]->st_town
                             );
                             $this->session->set_userdata($arr);

                              redirect("Std_dashboard");
                         }
                         else
                             $data["err"] = $this->lang->line('inactive_user');
                             $this->toastr->error($data["err"]);
							
                      }
                     else
                     {


                         $data["title"]  = $this->lang->line('Login_page_admin_control_panel');
                         $data["err"] = $this->lang->line('error_username_or_password');
                         $this->toastr->error($data["err"]);
                         $this->load->view('std_pages/login_vw' , $data);
                         return false;
                     }
                 }
                 else
                 {

                     redirect("login");
                 }
             }
             $this->load->view('std_pages/login_vw' ,$data);
         }

        public function register_std()
        {
            switch($this->session->userdata('lang'))
            {
                case 'portg':$this->lang->load("cperm","portuguese");break;
                case 'arabic':$this->lang->load("cperm","arabic");break;
                default:
                    if($this->session->userdata('lang') !='')
                    {
                        $this->session->sess_destroy();
                        redirect("login");
                    }else
                    {$this->lang->load("cperm","arabic");}
                    break;
            }

            $data["page_title"] = $this->lang->line("std_register");
            $this->load->view('std_pages/register_vws' ,$data);
        }
	  }
?>