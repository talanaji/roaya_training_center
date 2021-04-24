<?php 
 class MY_Controller extends CI_Controller 
	{
		public $dbfile;
		public $expire;
		public $viss;
		public $data;
		public $scr_code ;
		public $usr_privs ;
		public $is_logged = 0;
		public $STD_mainPHOTO=0;
		public $options = 0;
		public function __construct()
		{
			parent::__construct();
			error_reporting(0);
			$this->update_reg_course();
			$this->is_logged = 0;
            $this->STD_mainPHOTO = $this->get_STD_mainPHOTO();
            $this->db->where("op_code", 1);
            $this->options = $this->db->get("options")->row();

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
            if($this->is_logged_in())
		     {
				 $link = '';
                 $this->is_logged = 1;

			 if(empty($_POST))
			 {
				if($this->session->userdata('User_type') == 2)// Normal User 
				{ 
					  if($this->uri->segment('1')!= NULL &&  $this->uri->segment('2')!=NULL)
						  $link =  $this->uri->segment('1').'/'. $this->uri->segment('2');
						else
						  $link =  $this->uri->segment('1');

					$this->scr_code = $this->get_scr_code($link) ;
					$per_arr = explode(',',$this->get_users_scrprivs($this->session->userdata('User_code')));


						if(in_array($this->scr_code,$per_arr))
						{return true;}
						else
						{
							redirect('Home/?err=perm');
						}
					}
				else
				{
					return true;
				}
			 }
  		   }
		   else
		   {
             /*general functions for std */

		   }
			
 		}
		
		public function get_teachers($te_code='')
		{
			if($te_code !='')
				$this->db->where("te_code",$te_code);
			$this->db->where("te_active",1);
  			$teachers = $this->db->get("teachers");
			return $teachers;
		}
		public function times_increment_30()
		{
			$begin = new DateTime("08:00");
			$end   = new DateTime("20:30");

			$interval = DateInterval::createFromDateString('30 min');
			$times    = new DatePeriod($begin, $interval, $end);
            return $times;
			 
		}
		public function get_rooms()
		{ // get Data set of rooms
			$this->db->where("room_active",1);
			$rooms = $this->db->get("rooms");
			return $rooms;
		}
	    public function get_reservation_per_teacher($res_teach_code=NULL,
												 $res_room_code=NULL,
												 $tm_row=NULL,
												 $res_todate)
		{ // get Data set of today Reservation for this teacher 
 			$where = " and  DATE_FORMAT(res_time_start,'%Y-%m-%d') = '". date("Y-m-d")."'";
		 if(!empty($res_todate))
			 $where = " and  DATE_FORMAT(res_time_start,'%Y-%m-%d')  = '".date('Y-m-d',strtotime($res_todate))."'";
		 
			
	 
 			$reservs = $this->db->query("select Distinct res_teach_code, res_admin_note from 
										 reservations  
 			                 where    res_teach_code = ".$res_teach_code."
							 and      res_room_code  = ".$res_room_code."
							 and      DATE_FORMAT(res_time_start, '%H:%i') <= '".$tm_row."'
							 and      DATE_FORMAT(res_time_end, '%H:%i') >= '".$tm_row."' ".
						     $where .
 							 " order by res_code desc ")->result();
 			 //	 
	 
			return $reservs;
		}
	
	    public function get_rooms_of_teachers(
		 								   $res_room_code=NULL,
										   $tm_row=NULL,
										   $res_todate)
		{ // get Data set of today Reservation for this teacher 
 		//	$where = " and res_todate = '". date("Y-m-d")."'";
		// if(!empty($res_todate))
			// $where = " and res_todate  = '".date('Y-m-d',strtotime($res_todate))."'";
		 
				$where = " and DATE_FORMAT(res_time_start,'%Y-%m-%d') = '". date("Y-m-d")."'";
		 if(!empty($res_todate))
			 $where = "  and  DATE_FORMAT(res_time_start,'%Y-%m-%d')  = '".date('Y-m-d',strtotime($res_todate))."'";
	 
 			$Oth_reservs = $this->db->query("select Distinct te_name   from 
													 reservations  , 
													 teachers
 			                 where       res_room_code  = ".$res_room_code."
							 and      res_teach_code = te_code 
 							 and      DATE_FORMAT(res_time_start, '%H:%i') <= '".$tm_row."'
							 and      DATE_FORMAT(res_time_end, '%H:%i') >= '".$tm_row."' ".
						     $where .
 							 " order by res_code desc ")->result();
 			 //	 
	 
			return $Oth_reservs;
		}	
		public function get_users_btnprivs($btn_code , $usr_code_session,$user_type)
		{
 			//get_users_btnprivs($btn_code=5 , $usr_code_session=NULL,1) // admin
			if($user_type == 1) // admin , super admin 
			{
				return 1 ; 
			}
		   else 
		   {
  			  $this->db->where("u_code",$usr_code_session);
			  $this->db->where("u_type !=" , 1);
			  $out = $this->db->get("users")->row();
			  $btns_arr = explode(',', $out->u_btn_priv);
			  if(in_array($btn_code,$btns_arr))
				  return  1; 
			  else 
				  return  0;
			  } 
		}
		public function get_users_btnprivs_ajax($btn_code , $usr_code_session,$user_type)
		{
 			//get_users_btnprivs($btn_code=5 , $usr_code_session=NULL,1) // admin
			if($user_type == 1) // admin , super admin 
			{
				echo 1 ; 
			}
		   else 
		   {
  			  $this->db->where("u_code",$usr_code_session);
			  $this->db->where("u_type !=" , 1);
			  $out = $this->db->get("users")->row();
			  $btns_arr = explode(',', $out->u_btn_priv);
			  if(in_array($btn_code,$btns_arr))
				  echo  1; 
			  else 
				  echo  0;
			  } 
		}
	    public function get_users_scrprivs($usr_code_session)
	    {
			  $this->db->where("u_code",$usr_code_session);
			  $this->db->where("u_type !=" , 1);
			  $out = $this->db->get("users")->row();
			  return $out->u_scr_priv;
		}
 		public function get_scr_code($link)
		{
			$this->db->where("s_url" , $link);
			$s = $this->db->get("screens")->row();
			return $s->s_code;
		}
	    public function is_logged_in()
		{
		  if($this->session->userdata('User_code') || $this->session->userdata('User_name'))
				return 1; 
			else 
				return 0 ; 
		}
	    public function is_loggedin_Std()
		{
		  if($this->session->userdata('st_code') || $this->session->userdata('st_ID'))
				return 1;
			else
				redirect("Login/login_std");
		}

		public function get_all_items($table)
		{
			$q = $this->db->get($table)->result();
			return $q;
		}
		
 		public function get_counts($table , $ilias ,$cond=array())
		{
			$this->db->select("count(*) as ".$ilias);
			$this->db->where($cond);
			$c = $this->db->get($table)->row();
			return $c->$ilias;
		}
        public function doUpload($control, $path, $imageName, $sizes)
     {
         if( ! isset($_FILES[$control]) || ! is_uploaded_file($_FILES[$control]['tmp_name']))
         {
             print('No file was chosen');
             return FALSE;
         }
         if($_FILES[$control]['size']>2048000)
         {
             print('File is too large ('.round(($_FILES[$control]["size"]/1000)).'kb), please choose a file under 2,048kb');
             return FALSE;
         }
         if($_FILES[$control]['error'] !== UPLOAD_ERR_OK)
         {
             print('Upload failed. Error code: '.$_FILES[$control]['error']);
             return FALSE;
         }
         switch(strtolower($_FILES[$control]['type']))
         {
             case 'image/jpeg':
                 $image = imagecreatefromjpeg($_FILES[$control]['tmp_name']);
                 move_uploaded_file($_FILES[$control]["tmp_name"],$path.$imageName);
                 break;
             case 'image/png':
                 $image = imagecreatefrompng($_FILES[$control]['tmp_name']);
                 move_uploaded_file($_FILES[$control]["tmp_name"],$path.$imageName);
                 break;
             case 'image/gif':
                 $image = imagecreatefromgif($_FILES[$control]['tmp_name']);
                 move_uploaded_file($_FILES[$control]["tmp_name"],$path.$imageName);
                 break;
             default:
                 print('This file type is not allowed');
                 return false;
         }
         @unlink($_FILES[$control]['tmp_name']);
         $old_width      = imagesx($image);
         $old_height     = imagesy($image);


         //Create tn version
         if($sizes=='tn' || $sizes=='all')
         {
             $max_width = 100;
             $max_height = 100;
             $scale          = min($max_width/$old_width, $max_height/$old_height);
             if ($old_width > 100 || $old_height > 100)
             {
                 $new_width      = ceil($scale*$old_width);
                 $new_height     = ceil($scale*$old_height);
             } else {
                 $new_width = $old_width;
                 $new_height = $old_height;
             }
             $new = imagecreatetruecolor($new_width, $new_height);
             imagecopyresampled($new, $image,0, 0, 0, 0,$new_width, $new_height, $old_width, $old_height);
             switch(strtolower($_FILES[$control]['type']))
             {
                 case 'image/jpeg':
                     imagejpeg($new, $path.'tn_'.$imageName, 90);
                     break;
                 case 'image/png':
                     imagealphablending($new, false);
                     imagecopyresampled($new, $image,0, 0, 0, 0,$new_width, $new_height, $old_width, $old_height);
                     imagesavealpha($new, true);
                     imagepng($new, $path.'tn_'.$imageName, 0);
                     break;
                 case 'image/gif':
                     imagegif($new, $path.'tn_'.$imageName);
                     break;
                 default:
             }
         }

         imagedestroy($image);
         imagedestroy($new);
         return $imageName;
     }
        public function del_one_item($table,$where_col , $val)
		{
 			$this->db->where($where_col,$val);
			$d = $this->db->delete($table);
			return $d;
		}
	    public function upload_photo($file , $path ,$prefix_type, $sub_id , $sub_title ,$P_is_slider ,$P_active )
	    {// Upload photo for any subject + store sub_code and sub_title in photo table DB
		   //echo $file .' -- '. $path  .' -- '.$prefix_type .' -- '. $sub_id  .' -- '. $sub_title  .' -- '.$P_is_slider  .' -- '.$P_active ; exit;
		   //
   	    foreach($_FILES[$file]["name"] as $key=>$val) {	  
 			if(isset($_FILES[$file]["type"][$key]))
			{
			$new_image_name   = time().'_'.$_FILES[$file]["name"][$key];
 				$validextensions = array("jpeg", "jpg", "png","gif","doc","pdf","txt","docx","xlsx","xls");
				$temporary = explode(".", $new_image_name);
				$file_extension = end($temporary);
				if ( in_array($file_extension, $validextensions)) 
				{
				  if(($_FILES[$file]["size"][$key] > 20000))//Approx. 100kb files can be uploaded.
				  {
					if ($_FILES[$file]["error"][$key] > 0)
					{
						$out = "Return Code: " . $_FILES[$file]["error"][$key] . "<br/><br/>";
					}
					else
					{
						if (file_exists($path."/" . $new_image_name)) {
							$out = $new_image_name . " <span id='invalid'><b>already exists.</b></span> ";
						}
						else
						{ 
						    $sourcePath = $_FILES[$file]['tmp_name'][$key]; //Storing source path of the file in a variable
							$targetPath = $path.$new_image_name; // Target path where file is to be stored
					    // water mark here 
							$photo_data = array(
							 					"P_title_ar" =>$sub_title ,
												"P_title_en" =>$sub_title ,
								                "P_desc_ar" =>'' ,
												"P_desc_en" =>'' ,
												"P_photo" => $targetPath , 
												"P_is_slider" => $P_is_slider ,
												"P_active" => $P_active);
 							move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
							$this->db->where("prefix_type",$prefix_type);
							$this->db->where("Rcu_id",$sub_id);
							$this->db->update("subject_photos" , array("is_main" => 0 ));  //make all old photos zero main ...
							$this->db->insert("photos",$photo_data);
							$generated_photo_id = $this->db->insert_id();
							if($key == 0)
							  $is_main = 1;
							  else
							  $is_main = 0;
							$this->db->insert("subject_photos" , 
							                   array("Rcu_id" => $sub_id ,
											         "Photo_id"=> $generated_photo_id ,
													 "prefix_type"=> $prefix_type ,
													 "is_main" => $is_main,
													 "S_active" => $P_active
        											 ));
							}
						  }
				  }
				  else
				  {
					  echo  $this->lang->line('not_upload_photo');
				  }
			   }
		     }
		   }
	     }
 	    public function upload_doc($file , $path ,$prefix_type, $sub_id , $sub_title ,$P_is_slider ,$P_active )
	    { 
   	    foreach($_FILES[$file]["name"] as $key=>$val) {	  
 			if(isset($_FILES[$file]["type"][$key]))
			{
			$new_doc_name   = time().'_'.$_FILES[$file]["name"][$key];
 				$validextensions = array("doc", "docx", "pdf","ppt","pptx","xls","txt","xlsx");
				$temporary = explode(".", $new_doc_name);
				$file_extension = end($temporary);
				 //     echo 'doc'.$file_extension;exit;
				if ( in_array($file_extension, $validextensions)) 
				{ 
					if ($_FILES[$file]["error"][$key] > 0)
					{
						$out = "Return Code: " . $_FILES[$file]["error"][$key] . "<br/><br/>";
					}
					else
					{
						if (file_exists($path."/" . $new_doc_name)) {
							$out = $new_doc_name . " <span id='invalid'><b>already exists.</b></span> ";
						}
						else
						{ 
						    $sourcePath = $_FILES[$file]['tmp_name'][$key]; //Storing source path of the file in a variable
							$targetPath = $path.$new_doc_name; // Target path where file is to be stored
					    // water mark here 
							$photo_data = array(
							 					"P_title_ar" =>$sub_title ,
												"P_title_en" =>$sub_title ,
								                "P_desc_ar" =>'' ,
												"P_desc_en" =>'' ,
												"P_photo" => $targetPath , 
												"P_is_slider" => $P_is_slider ,
												"P_active" => $P_active);
 							move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
							$this->db->where("prefix_type",$prefix_type);
							$this->db->where("Rcu_id",$sub_id);
							$this->db->update("subject_photos" , array("is_main" => 0 ));  //make all old photos zero main ...
							$this->db->insert("photos",$photo_data);
							$generated_photo_id = $this->db->insert_id();
							if($key == 0)
							  $is_main = 1;
							  else
							  $is_main = 0;
							$this->db->insert("subject_photos" , 
							                   array("Rcu_id" => $sub_id ,
											         "Photo_id"=> $generated_photo_id ,
													 "prefix_type"=> $prefix_type ,
													 "is_main" => $is_main,
													 "S_active" => $P_active
        											 ));
							}
						  } 
			   }
			   else {
			       	$out = $this->lang->line('valid_exti')." doc, docx, ppt, pptx, pdf, xls, xlsx, txt ";
			   }
			   
			   }
		     }
		   }
 	    public function get_photos($rcu=-1 ,$prefix_type , $active=-1) // Draw table for draw Tr's of table Get Data to get array data
	  {
  		  $qr =array();
		  if($rcu == -1)
		  {
			 $qr = $this->get_all_items("photos" , 0 , false);
		  }
		  else
		  {
		     // echo '------------'. $rcu.'feeeeeeee'.$prefix_type;
			  $this->db->where("Rcu_id" , $rcu);
			  $this->db->where("prefix_type" , $prefix_type);
			  $qr_photo_codes = $this->db->get("subject_photos")->result();
	
			  for($i=0; $i<=count($qr_photo_codes)-1; $i++)
			  {
				  $this->db->select("*");
				  $this->db->from("photos");
				  if($active >= 0)
				  $this->db->where("P_active" ,$active );
				  $this->db->where("P_code",$qr_photo_codes[$i]->Photo_id);
				  $this->db->join('subject_photos', 'photo_id = P_code','left');
				  $qr[] = $this->db->get()->result();
 			  }
 		  }
  				 return $qr;
 	  }
		
	    public function draw_fetched_photos($rcu , $prefix_type , $active)
	  {
		  if($this->is_logged_in() == 1 || $this->is_loggedin_Std()==1)
		  {
			 $validextensions = array("jpeg", "jpg", "png","gif","pdf","doc","docx","txt");
			 $filee='';	
		     $fetch_photos = $this->get_photos($rcu , $prefix_type , $active);
			  if(!empty($fetch_photos))
			  {
			  echo '<table id="examplefiles" class="table table-hover table-vcenter table_custom text-nowrap spacing5 text-nowrap mb-0">
								  <thead>
									 <tr>
										<th>'.$this->lang->line("files").'</th>
										<th>'.$this->lang->line("ele_name").'</th>
										<th>'.$this->lang->line("photo_main").'</th>
										<th class="slider">'.$this->lang->line("photo_slider").'</th>
										<th>'.$this->lang->line("active").'</th>
										<th>'.$this->lang->line("operations").'</th>
									</tr>
									</thead>
									<tfoot>
										 <tr>
											<th>'.$this->lang->line("files").'</th>
											<th>'.$this->lang->line("ele_name").'</th>
											<th>'.$this->lang->line("photo_main").'</th>
										    <th class="slider">'.$this->lang->line("photo_slider").'</th>
											<th>'.$this->lang->line("active").'</th>
											<th>'.$this->lang->line("operations").'</th>
										</tr>
									</tfoot>
									<tbody id="tdata">';
				  
				  for($i=0 ; $i<=count($fetch_photos)-1 ; $i++)
				  {
					    $temporary = explode(".", $fetch_photos[$i][0]->P_photo);
						$file_extension = end($temporary);
					    $filee = '<a href="'.base_url().$fetch_photos[$i][0]->P_photo.'" target="_blank" style="text-decoration:none">
						<i class="fa fa-file">ملف نصي</i></a>' ;
					   if($fetch_photos[$i][0]->is_main == 1)
					    $ism = 'checked=checked';
						else
						$ism = '';
					  
					   if($fetch_photos[$i][0]->P_is_slider == 1)
					    $ps = 'checked=checked';
						else
						$ps = '';
		  
						if($fetch_photos[$i][0]->S_active == 1)
					    $ac = 'checked=checked';
						else
						$ac = '';
					 if(
						  $file_extension=="jpg" ||
						  $file_extension=="gif" ||
						  $file_extension=="png" ||
						  $file_extension=="jpeg"  
						)
					  { 
						   $xx = '<td><input type="checkbox" class="photo_main" title="'.$fetch_photos[$i][0]->is_main.'" '.$ism .'/></td>'.
						   '<td class="slider"><input type="checkbox" class="photo_slider" title="'.$fetch_photos[$i][0]->P_is_slider.'" '.$ps .'/></td>';
						  $filee ='<img src="'.base_url().$fetch_photos[$i][0]->P_photo.'" alt="'.$fetch_photos[$i][0]->P_title_ar.'" width="100" height="100"/>';
					  }
					  else{
						   $xx = '<td>...</td>'.
						   '<td>...</td>';
					  }
					 
						
					echo '<tr S_code="'.$fetch_photos[$i][0]->S_code.'" rcu="'.$fetch_photos[$i][0]->Rcu_id.'" P_code="'.$fetch_photos[$i][0]->P_code.'" >'.
						   '<td>'.$filee.'</td>'.
						   '<td>'.$fetch_photos[$i][0]->P_title_ar.'</td>'.
					        $xx .
						   '<td><input type="checkbox" class="photo_active" title="'.$fetch_photos[$i][0]->S_active.'" '.$ac.'/></td>'.
						   '<td><a style="cursor:pointer" class="Del_photo" 
								   title="'.$fetch_photos[$i][0]->P_code.'"
								   rcu = "'.$rcu.'"><i class="fa fa-remove"></i></a>'.
						   '</td>'.
						'</tr>';
				  }
					  echo '</tbody></table>';
			  }
			  else
			  {
				  echo $this->lang->line("image_not_found");
			  }
		  }
		  else
		  {
			  echo $this->lang->line("must_login");
		  }
	  }
	    public function draw_fetched_docs($rcu , $prefix_type , $active)
	  {
	      //echo $rcu . 'rcu' . $prefix_type .'prefix_type'. $active. 'active';
		  if($this->is_logged_in() == 1)
		  {
			 $validextensions = array("doc", "docx", "pdf","ppt","pptx","xls","txt","xlsx");
			 $filee='';	
		     $fetch_docs = $this->get_photos($rcu , $prefix_type , $active);
			  if(!empty($fetch_docs))
			  {
			  echo '<table name="example"  class="table table-hover table-vcenter table_custom text-nowrap spacing5 text-nowrap mb-0">
								  <thead>
									 <tr>
										<th>'.$this->lang->line("files").'</th>
										<th>'.$this->lang->line("st_name").'</th>  
										<th>'.$this->lang->line("active").'</th>
										<th>'.$this->lang->line("operations").'</th>
									</tr>
									</thead>
									<tfoot>
										 <tr>
											<th>'.$this->lang->line("files").'</th>
											<th>'.$this->lang->line("st_name").'</th> 
											<th>'.$this->lang->line("active").'</th>
											<th>'.$this->lang->line("operations").'</th>
										</tr>
									</tfoot>
									<tbody id="tdata">';
				  
				  for($i=0 ; $i<=count($fetch_docs)-1 ; $i++)
				  {
					    $temporary = explode(".", $fetch_docs[$i][0]->P_photo);
						$file_extension = end($temporary);
						if($file_extension=="doc" || $file_extension=="docx"){$icon = "fa-file-word-o" ; $fin = "ملف ورد";}
				    	if($file_extension=="pdf" ){$icon = "fa-file-word-o" ; $fin = "ملف ورد";}
				        if( $file_extension=="ppt" ||$file_extension=="pptx" ){$icon = "fa-file-word-o" ; $fin = "ملف ورد";}
				        if($file_extension=="xls" ||  $file_extension=="xlsx" ){$icon = "fa-file-word-o" ; $fin = "ملف ورد";}
						if( $file_extension=="txt" ){$icon = "fa-file-word-o" ; $fin = "ملف ورد";}
					    $filee = '<a href="'.base_url().$fetch_docs[$i][0]->P_photo.'" target="_blank" style="text-decoration:none">
						<i class="fa fa-file-word-o">'.$fin.'</i></a>' ; 
						if($fetch_docs[$i][0]->S_active == 1)
					    $ac = 'checked=checked';
						else
						$ac = '';
					 if(
					     //"doc", "docx", "pdf","ppt","pptx","xls","txt","xlsx"
						  $file_extension=="doc" ||
						  $file_extension=="docx" ||
						  $file_extension=="pdf" ||
						  $file_extension=="ppt" ||
						  $file_extension=="pptx" ||
						  $file_extension=="xls" ||
						  $file_extension=="txt" ||
						  $file_extension=="xlsx"  
						)
					  {  
						  $filee ='<a href="'.base_url().$fetch_docs[$i][0]->P_photo.'" alt="'.$fetch_docs[$i][0]->P_title_ar.'" > '.$this->lang->line('download_file').'</a>';
					  }
					  else{
						
					
					  }
					 
						
					echo '<tr S_code="'.$fetch_docs[$i][0]->S_code.'" rcu="'.$fetch_docs[$i][0]->Rcu_id.'" P_code="'.$fetch_docs[$i][0]->P_code.'" >'.
						   '<td>'.$filee.'</td>'.
						   '<td>'.$fetch_docs[$i][0]->P_title_ar.'</td>'.
					        $xx .
						   '<td><input type="checkbox" class="photo_active" title="'.$fetch_docs[$i][0]->S_active.'" '.$ac.'/></td>'.
						   '<td><a style="cursor:pointer" class="Del_photo" 
								   title="'.$fetch_docs[$i][0]->P_code.'"
								   rcu = "'.$rcu.'"><i class="fa fa-remove"></i></a>'.
						   '</td>'.
						'</tr>';
				  }
					  echo '</tbody></table>';
			  }
			  else
			  {
				  echo $this->lang->line("file_not_found");
			  }
		  }
		  else
		  {
			  echo $this->lang->line("must_login"); 
		  }
	  }
		
	    public function delete_photos($photo_code =0 , $rcu=0 , $prefix_type)
	  { 
	          $this->db->where('P_code',$photo_code);
			  $row = $this->db->get("photos")->row();
	    if($rcu == 0) // there no record in subject photo
		  {
 				$this->db->where("P_code",$photo_code);
		    	$this->db->delete("photos");
				unlink($row->P_photo);
		  }
		  else
		  { 
			    $this->db->where("Rcu_id",$rcu);
				$this->db->where("prefix_type",$prefix_type);
			    $this->db->where("Photo_id",$photo_code);
		    	$this->db->delete("subject_photos");
				
			    $this->db->where("P_code",$photo_code);
		    	$this->db->delete("photos");
				unlink($row->P_photo);
		  }
	  }
	    public function update_reg_course()
	  {
		$curs_data = $this->db->get("registration_courses")->result();
		foreach($curs_data as $one_row)
		{
			if($one_row->reg_end_date <= date('Y-m-d'))
			{
				$this->db->where("reg_code",$one_row->reg_code);
				$this->db->update("registration_courses",array("reg_is_complete"=>1));
			}
		}
	  }
	    public function loader_gif($pic_name)
	    {
		  return "<img src='".base_url()."public/img/".$pic_name."'/>";
	    }
		public function get_STD_mainPHOTO()
        {
            if($this->session->userdata('st_code')!='')
            {
                $r = $this->db->query("select P_photo from students , subject_photos , photos 
                                       where Rcu_id = st_code
                                       and   Photo_id = P_code
                                       and   prefix_type = 'STD'
                                       and   is_main  = 1
                                       and   st_code  = ".$this->session->userdata('st_code')."
                                       and   S_active = 1 ")->row();
            }
           return $r->P_photo;
        }
        public function send_mail_center($view_name=NULL,$varMsg=NULL,$email_from=NULL , $email_to=NULL,$email_name=NULL , $email_subject=NULL,$var1=NULL ,$var2=NULL ,$var3=NULL ,$var4=NULL ,$var5=NULL ,$var6=NULL ,$var7=NULL )
     {

         if($view_name!=NULL || $email_from!= NULL || $email_to!=NULL || $email_subject!=NULL || $varMsg!=NULL) {

             $demo_txt = ["{var1}","{var2}","{var3}","{var4}","{var5}","{var6}","{var7}"];
             $real_txt = [$var1,$var2,$var3,$var4,$var5,$var6,$var7];
               if(!empty($var1) ||!empty($var2) ||!empty($var3) ||!empty($var4) ||!empty($var5) ||!empty($var6) ||!empty($var7))
                   $out = str_replace($demo_txt , $real_txt ,$varMsg);

             $data["msg_txt"] =  $out ;
             $htmlContent = $this->load->view($view_name,$data,TRUE);

             $to = $email_to;//.','.$this->options->op_admin_email;
             $subject = $email_subject;
             $headers = "From: " . $email_name . "\r\n";
             $headers .= "Reply-To: ". strip_tags($email_from) . "\r\n";
             $headers .= "MIME-Version: 1.0\r\n";
             $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

              if(mail($to, $subject, $htmlContent, $headers))
                 return 1;
             else
                 return 0 ;

         }

     }
        public function add_std_notify($curr_codepost,$msgs , $type ,$person_code, $person_name , $act)
        {
            $arr = array(
                "stdn_st_code "=>$curr_codepost,
                "stdn_msg"=>$msgs,
                "stdn_send_date"=>date('Y-m-d h:i'),
                "stdn_send_type "=>$type ,
                "person_code "=>$person_code ,
                "person_name "=>$person_name ,
                "stdn_active "=> $act,
            );
            $this->db->insert("students_notfications",$arr);
        }
			    public function draw_fetched_photos2($rcu , $prefix_type , $active)
	  {
		  if($this->is_logged_in() == 1 || $this->is_loggedin_Std()==1)
		  {
			 $validextensions = array("jpeg", "jpg", "png","gif","pdf","doc","docx","txt");
			 $filee='';	
		     $fetch_photos = $this->get_photos($rcu , $prefix_type , $active);
			  if(!empty($fetch_photos))
			  {
			  echo '<table id="examplefiles" class="table table-hover table-vcenter table_custom text-nowrap spacing5 text-nowrap mb-0">
								  <thead>
									 <tr>
										<th>'.$this->lang->line("files").'</th>
										<th>'.$this->lang->line("ele_name").'</th>
										<th>'.$this->lang->line("photo_main").'</th>
										<th class="slider">'.$this->lang->line("photo_slider").'</th>
										<th>'.$this->lang->line("active").'</th>
										<th>'.$this->lang->line("operations").'</th>
									</tr>
									</thead>
									<tfoot>
										 <tr>
											<th>'.$this->lang->line("files").'</th>
											<th>'.$this->lang->line("ele_name").'</th>
											<th>'.$this->lang->line("photo_main").'</th>
										    <th class="slider">'.$this->lang->line("photo_slider").'</th>
											<th>'.$this->lang->line("active").'</th>
											<th>'.$this->lang->line("operations").'</th>
										</tr>
									</tfoot>
									<tbody id="tdata">';
				  
				  for($i=0 ; $i<=count($fetch_photos)-1 ; $i++)
				  {
					    $temporary = explode(".", $fetch_photos[$i][0]->P_photo);
						$file_extension = end($temporary);
					    $filee = '<a href="'.base_url().$fetch_photos[$i][0]->P_photo.'" target="_blank" style="text-decoration:none">
						<i class="fa fa-file">ملف نصي</i></a>' ;
					   if($fetch_photos[$i][0]->is_main == 1)
					    $ism = 'checked=checked';
						else
						$ism = '';
					  
					   if($fetch_photos[$i][0]->P_is_slider == 1)
					    $ps = 'checked=checked';
						else
						$ps = '';
		  
						if($fetch_photos[$i][0]->S_active == 1)
					    $ac = 'checked=checked';
						else
						$ac = '';
					 if(
						  $file_extension=="jpg" ||
						  $file_extension=="gif" ||
						  $file_extension=="png" ||
						  $file_extension=="jpeg"  
						)
					  { 
						   $xx = '<td><input type="checkbox" class="photo_main" title="'.$fetch_photos[$i][0]->is_main.'" '.$ism .'/></td>'.
						   '<td class="slider"><input type="checkbox" class="photo_slider" title="'.$fetch_photos[$i][0]->P_is_slider.'" '.$ps .'/></td>';
						 // $filee ='<img src="'.base_url().$fetch_photos[$i][0]->P_photo.'" alt="'.$fetch_photos[$i][0]->P_title_ar.'" width="100" height="100"/>';
					  }
					  else{
						   $xx = '<td>...</td>'.
						   '<td>...</td>';
					  }
					 
						
					echo '<tr S_code="'.$fetch_photos[$i][0]->S_code.'" rcu="'.$fetch_photos[$i][0]->Rcu_id.'" P_code="'.$fetch_photos[$i][0]->P_code.'" >'.
						   '<td class="width45">  <a href="'.base_url().$fetch_photos[$i][0]->P_photo.'" data-toggle="lightbox"  >

 <i class="fa fa-file-image-o text-success"></i></a></td>'.
						   '<td>'.$fetch_photos[$i][0]->P_title_ar.'</td>'.
					        $xx .
						   '<td><input type="checkbox" class="photo_active" title="'.$fetch_photos[$i][0]->S_active.'" '.$ac.'/></td>'.
						   '<td><a style="cursor:pointer" class="Del_photo" 
								   title="'.$fetch_photos[$i][0]->P_code.'"
								   rcu = "'.$rcu.'"><i class="fa fa-remove"></i></a>'.
						   '</td>'.
						'</tr>';
				  }
					  echo '</tbody></table>';
			  }
			  else
			  {
				  echo $this->lang->line("image_not_found");
			  }
		  }
		  else
		  {
			  echo $this->lang->line("must_login");
		  }
	  }
	} 
?>