<?php 
	class Courses_ci extends MY_Controller
	{ 
		public function index()
		{
		    if($this->is_logged == 0)
		        redirect("login");
			$data["page_title"] = $this->lang->line("courses_managment");

		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/courses_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}

        public function comments()
        {
            $data["page_title"] = $this->lang->line('comments_manage');

            $this->load->view('cp/templates/header',$data);
            $this->load->view('cp/comments_vw',$data);
            $this->load->view('cp/templates/footer',$data);
        }
  		public function AddEdit_Courses()
		{
			extract($_POST);

			if(empty($crs_name) || $crs_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_name");
			  exit();
		    }
			if(empty($crs_hours) || $crs_hours == '')
		    {
			 echo $this->lang->line("required").$this->lang->line("crs_hours");
			  exit();
		    }
			if(empty($crs_details) || $crs_details == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_details");
			  exit();
		    }
			if(empty($crs_keywords) || $crs_keywords == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_keywords");
			  exit();
		    }
			if(empty($crs_subscrib) || $crs_subscrib == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_email");
			  exit();
		    }
			if(empty($crs_meetings) || $crs_meetings == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_phone1");
			  exit();
		    }
 			if(empty($crs_duration) || $crs_duration == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_town");
			  exit();
		    }
			if(empty($crs_price) || $crs_price == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_price");
			  exit();
		    }
			if(empty($crs_author) || $crs_author == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_author");
			  exit();
		    }
		 
			if(empty($crs_ages) || $crs_ages == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("crs_ages");
			  exit();
		    }

			if($crs_active ==  'on')
				$ac = 1;
			else 
				$ac = 0;
 			
			if($crs_show_pricea ==  'on')
				$acp = 1;
			else 
				$acp = 0;

			if($crs_is_preview == 'on')
                $crs_is_preview = 1 ;
                    else
                        $crs_is_preview = 0 ;
			 	//crs_code crs_name crs_hours crs_details crs_subscrib crs_meetings crs_duration crs_price crs_show_price crs_author crs_ages	 crs_active
            $arr = array(
                "crs_name"=>$crs_name ,
                "tr_cat_code"=>$tr_cat_code ,
                "crs_date"=>date('Y-m-d') ,
                "crs_hours"=>$crs_hours,
                "crs_details"=>$crs_details ,
                "crs_keywords"=>$crs_keywords,
                "crs_subscrib"=>$crs_subscrib ,
                "crs_meetings"=>$crs_meetings ,
                "crs_duration"=>$crs_duration,
                "crs_price"=>$crs_price ,
                "crs_show_price"=>$acp ,
                 "crs_ages"=>$crs_ages ,
                "crs_is_preview"=>$crs_is_preview ,
                "crs_active"=>$ac  );
	 if($curr_code == '' || $curr_code == NULL){
  				  $this->db->where("crs_is_preview" , 1);
 				  $this->db->update("training_courses",array("crs_is_preview"=>0));
 				 $doo = $this->db->insert("training_courses",$arr);
				 $thisid =  $this->db->insert_id();   
	  for ($ii = 0 ;$ii<=count($crs_author)-1;$ii++)
      {
          $this->db->insert("teachers_trainigs",array("tt_te_code"=>$crs_author[$ii] ,"tt_crs_code"=>$thisid ));
      }
		 	  
			if ( isset( $_FILES[ 'docs' ][ "name" ] ) ) {
 					$this->upload_doc( "docs", $this->config->item( 'IMAGE_FOLDER' ), COURSES_DOCS_PRIFIX,  $thisid, $arr[ "crs_name" ], 0, 1 );
			}
			if ( isset( $_FILES[ 'file' ][ "name" ] ) ) {
				$this->upload_photo( "file", $this->config->item( 'IMAGE_FOLDER' ), COURSES_PRIFIX, $thisid, $arr[ "crs_name" ], 0, 1 );
			}
  }
			else
			{
			    unset($arr["crs_date"]);
  			 $pk = $curr_code;
                $this->db->where("crs_is_preview" , 1);
                $this->db->update("training_courses",array("crs_is_preview"=>0));

			 $this->db->where("crs_code",$pk);
			 $doo = $this->db->update("training_courses",$arr);

			 $this->db->where("tt_crs_code",$curr_code);
			 $this->db->delete("teachers_trainigs");
                for ($ii = 0 ;$ii<=count($crs_author)-1;$ii++)
                {
                    $this->db->insert("teachers_trainigs",array("tt_te_code"=>$crs_author[$ii] ,"tt_crs_code"=>$curr_code ));
                }
			if ( isset( $_FILES[ 'file' ][ "name" ] ) ) {
				$this->upload_photo( "file", $this->config->item( 'IMAGE_FOLDER' ), COURSES_PRIFIX, $curr_code, $arr[ "crs_name" ], 0, 1 );
			}
				
			if ( isset( $_FILES[ 'docs' ][ "name" ] ) ) {

				$this->upload_doc( "docs", $this->config->item( 'IMAGE_FOLDER' ), COURSES_DOCS_PRIFIX, $curr_code, $arr[ "crs_name" ], 0, 1 );
			}
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
				  
				 if($dd->$chbox == 1)
					 $ac = "<span class='label label-success'>".$this->lang->line('active')."</span>";
					//crs_code crs_name crs_hours crs_details crs_subscrib crs_meetings crs_duration crs_price crs_show_price crs_author crs_ages	 crs_active
						    
				 else $ac = "<span class='label label-danger'>".$this->lang->line('Inactive')."</span>" ;
				 
				 
				 echo "<tr title=''>  
 			           <td>".$dd->$txt."</td>
						<td>".$dd->crs_subscrib."</td>
						<td>".$ac."</td>
 						<td>
 							  <a style='cursor:pointer'  class='Edit'
								title= '".$dd->$primary_key."'
								$txt = '".$dd->$txt."'
								$chbox = '".$dd->$chbox."'
							    crs_hours = '".$dd->crs_hours."'
 								crs_details= '".$dd->crs_details."'
 								crs_keywords= '".$dd->crs_keywords."' 
 								crs_subscrib= '".$dd->crs_subscrib."'
								crs_meetings= '".$dd->crs_meetings."'
								crs_duration= '".$dd->crs_duration."'
 								crs_price= '".$dd->crs_price."'
 								crs_show_pricea = '".$dd->crs_show_price."'
 								crs_author= '".$dd->crs_author."'
 								crs_ages= '".$dd->crs_ages."'  
 								tr_cat_code= '".$dd->tr_cat_code."' >
								<img src='".base_url()."/public/assets/images/icon/copywriter.png'  /></a>
								<a style='cursor:pointer' class='Del' title='".$dd->$primary_key."'><img src='".base_url()."/public/assets/images/icon/trash.png'  /></a>
						
								
								</td>
					         </tr>";
 			 }
		 }
        public function get_comments()
        {
            $d = $this->db->query("select * from comments,training_courses where comm_crs_code = crs_code")->result();

            foreach($d as   $dd )
            {

                if($dd->comm_is_show == 1)
                    $ac = "checked=checked";
                    //crs_code crs_name crs_hours crs_details crs_subscrib crs_meetings crs_duration crs_price crs_show_price crs_author crs_ages	 crs_active
                else
                     $ac = "" ;


                echo "<tr title=''>  
 			           <td><a style='cursor: pointer' class='show_comment' title='".$dd->comm_code."' data-toggle='modal' data-target='#exampleModalCenter'>".$dd->comm_title."</a></td>
						<td>".$dd->crs_name."</td>
						<td><input type='checkbox' title='".$dd->comm_code."' class='chks_box' ".$ac." /></td>
 						<td>
 						    <a style='cursor:pointer' class='Del' title='".$dd->comm_code."'><img src='".base_url()."/public/assets/images/icon/trash.png'  /></a>
						 </td>
					  </tr>";
            }
        }
        public function update_comment()
        {
            extract($_POST);
            $this->db->where("comm_code",$pk_post);
            $this->db->update("comments",array("comm_is_show"=>$vals));
        }
        public function show_comm_details()
        {
            extract($_POST);
            $this->db->where("comm_code",$pk_post);
            $r = $this->db->get("comments")->row();
            echo json_encode($r);
        }
		public function get_training_teachs()
        {
            extract($_POST);
            $arr = array();
            $this->db->where("tt_crs_code",$vals);

            $r = $this->db->get("teachers_trainigs")->result();
            foreach ($r as $t)
            {
                $arr []= $t->tt_te_code;
            }
            echo json_encode($arr);
        }
 	    public function get_keywords_id($crs_code =null)
		 {
		     $this->db->where('crs_code',$crs_code);
		     $kw= $this->db->get('training_courses')->row()->crs_keywords;
		     
		     echo "[".$kw."]";
		     
		 }
	    public function del_items($table,$where_col , $val)
	    {
			 $this->del_one_item($table,$where_col , $val);
		}
		
	}
?>