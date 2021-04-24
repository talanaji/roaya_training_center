<?php 
	class Teachers_ci extends MY_Controller
	{ 
		public function index()
		{ if($this->is_logged != 1)
            redirect('Login');
			$data["page_title"] = $this->lang->line("teachers_managment");
		    $this->load->view('cp/templates/header',$data);
			$this->load->view('cp/teachers_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
			public function available_app()
		{
			$data["page_title"] = $this->lang->line("teachers_available_prog");
			$data["teachers"]   = $this->get_teachers()->result();
			$this->load->view('cp/templates/header',$data);
			$this->load->view('cp/available_appointment_vw',$data);
			$this->load->view('cp/templates/footer',$data);
		}
		public function available_app_ajax()
		{
			extract($_POST);
			$html = '';
			$a=1;
			$rm=array();
 		    $times = $this->times_increment_30();
			
			$rooms = $this->get_rooms();
			$room  =$rooms->result();
			
			$teachs  = $this->get_teachers($te_code);
			$teachss   = $teachs->result();
			
			$interval = DateInterval::createFromDateString('30 min');
 			foreach($teachss as $teach)
			{
				
 				$html .= "<table class='table table-bordered' width='100%' border='1'>";
				$html .= '<thead>';
				$html .= '<tr>';
				$html .= '<td colspan="'.$rooms->num_rows().'" align="center"><strong style="font-size:19px; color:red">'.
						   $teach->te_name.
					     '</strong></td>';
				$html .= '</tr>';
				$html .= '</thead>';
				$html .= '<tbody>';
				/**************draw appointments ***********************************/
				$html .= '<tr>';
				$html .= '<td colspan="'.$rooms->num_rows().'">'; //td of inner table 
				$html .= "<table class='table table-bordered' width='100%' border='1'>";
				  
				$html .= '<tr>';
				$html .= '<td style="background-color:#f90"><h4>الساعة\الغرفة</h4></td>';
				  foreach($room as $rm )
				  {
					  $html.= '<td style="background-color:#c0c0c0; color:#f90"><h6><center>'.$rm->room_name.'<center></h6></td>';
				  }
				$html .= '</tr>';
				
	 	foreach($times as $tm)  // need the city_a as row index
		{			$html .= '<tr>';
					$html .= '<td  height="25" style="background-color:#c0c0c0; color:#f90"><h6><center>'. $tm->format('H:i') .'</center></h6></td>'; // city_a ad
			for($i=0;$i<$rooms->num_rows();$i++) 
			{ // need the city_b as column index
				 $reservs  = $this->get_reservation_per_teacher($teach->te_code ,$room[$i]->room_code , $tm->format('H:i')  , $res_date);// one row of reservation 
				
				$Other_tables_reservs  = $this->get_rooms_of_teachers( $room[$i]->room_code , $tm->format('H:i')  , $res_date);// one row of reservation
				
			 if(!empty($reservs))
			 {
				 foreach($reservs as $res) 
				 {
				          $style='style="background-color:green; color:white;font-size:10px"';
						  $cell_content = "X";
						  $titles = "title='".$res->res_admin_note."'";
					   
					 
					$html .= '<td '.$style.' '.$titles.'>
					  <strong><center>'.$cell_content.'</center></strong>
					</td>'; //color:white" distance from the matrix;
				 }
			 }
			 elseif(!empty($Other_tables_reservs))
			 {
				 foreach($Other_tables_reservs as $oth_res)
				 {
					 	  $style='style="background-color:#c0c0c0"';
						  $cell_content = $this->lang->line('reserved_other_teacher').$oth_res->te_name;
					      $titles = "title='".$oth_res->te_name."'";
					 
					 $html .= '<td '.$style.' '.$titles.'>
					  <strong><center>'.$cell_content.'</center></strong>
					</td>'; //color:white" distance from the matrix;
				 }
			 }
				  else
				  {
					 $html.='<td></td>';
				  }
			  }
					$html .= '</tr>';
				}
				$html .= '</table>';
				$html .= '</td>';// end of td of inner table 
				$html .= '</tr>';
				
				/**************End draw********************************************/
				$html .= '</tbody>';
				$html .= '</table>';
			}
		  
			
			echo $html;
		}
  	    public function AddEdit_teachers()
		{
			extract($_POST);
			 
			 
  			if(empty($te_courses_codes) || $te_courses_codes == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_courses_codes");
			  exit();
		    }
			if(empty($te_name) || $te_name == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_name");
			  exit();
		    }
			if(empty($te_ID) || $te_ID == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_ID");
			  exit();
		    }
			if(empty($te_birthday) || $te_birthday == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_birthday");
			  exit();
		    }
			if(empty($te_email) || $te_email == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_email");
			  exit();
		    }
			if(empty($te_phone1) || $te_phone1 == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_phone1");
			  exit();
		    }
 			if(empty($te_town) || $te_town == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_town");
			  exit();
		    }
			if(empty($te_gender) || $te_gender == '')
		    {
			  echo $this->lang->line("required").$this->lang->line("te_gender");
			  exit();
		    }
		 
 			
			if($te_active ==  'on')
				$ac = 1;
			else 
				$ac = 0;
			 if($curr_code == '' || $curr_code == NULL){
		 		$arr = array( 
				 		  "te_name"=>$te_name , 
				 		  "te_courses_codes"=>json_encode($te_courses_codes), 
				 		  "te_ID"=>$te_ID , 
				 		  "te_birthday"=>date('Y-m-d',strtotime($te_birthday)) , 
				 		  "te_email"=>$te_email , 
				 		  "te_phone1"=>$te_phone1, 
				 		  "te_town"=>$te_town , 
				 		  "te_gender"=>$te_gender , 
				 		  "te_notes"=>$te_notes , 
 				 		  "te_active"=>$ac,
						  "te_reg_date"=>date('Y-m-d')) ;
 				  
 				 $doo = $this->db->insert("teachers",$arr);
				 $thisid =  $this->db->insert_id();   
				 
				/** create profiel in users table *****/ 
				 $this->db->where('u_email',$te_email);
				 $olduser_profile = $this->db->get('users');
				 if($olduser_profile->num_rows() > 0 )
				 {
					 $this->db->where('u_email',$te_email);
					 $this->db->update('users',array("u_ID"=>$te_ID));
				 }
				 else{
				 $this->db->insert("users",array("u_ID"=>$te_ID , "u_fname"=>$te_name , "u_username"=>$te_ID , "u_password"=>md5($te_ID) , "u_type"=>2,"u_active"=>0 , "u_email"=>$te_email));
				 }
                 if ( isset( $_FILES[ 'file' ][ "name" ] ) ) {
                     $this->upload_photo("file" , $this->config->item('IMAGE_FOLDER') ,TEACHER_PRIFIX, $thisid , $arr["te_name"] , 0 , 1 );
                 }

			 } 
			else
			{
 
				$arr = array( 
				 		  "te_name"=>$te_name , 
				 		  "te_courses_codes"=>json_encode($te_courses_codes) , 
				 		  "te_ID"=>$te_ID , 
				 		  "te_birthday"=>date('Y-m-d',strtotime($te_birthday)) , 
				 		  "te_email"=>$te_email , 
				 		  "te_phone1"=>$te_phone1, 
				 		  "te_town"=>$te_town , 
				 		  "te_gender"=>$te_gender , 
				 		  "te_notes"=>$te_notes , 
 				 		  "te_active"=>$ac ) ;
 		
			 $pk = $curr_code;
			 $this->db->where("te_code",$pk);
			 $doo = $this->db->update("teachers",$arr);
                if ( isset( $_FILES[ 'file' ][ "name" ] ) ) {
                    $this->upload_photo("file" , $this->config->item('IMAGE_FOLDER') ,TEACHER_PRIFIX, $pk , $arr["te_name"] , 0 , 1 );
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
					
				 else $ac = "<span class='label label-danger'>".$this->lang->line('Inactive')."</span>" ;
				 echo "<tr title=''>  
 			           <td>".$dd->$txt."</td>
						<td>".$dd->te_phone1."</td>
						<td>".$ac."</td>
 						<td>
						     <a style='cursor:pointer'  class='Edit'
								title= '".$dd->$primary_key."'
								$txt = '".$dd->$txt."'
								$chbox = '".$dd->$chbox."'
							    te_name = '".$dd->te_name."'
 								te_phone1= '".$dd->te_phone1."'
 								te_ID= '".$dd->te_ID."'
								te_email= '".$dd->te_email."'
								te_town= '".$dd->te_town."'
 								te_birthday= '".$dd->te_birthday."'
 								te_active= '".$dd->te_active."'
 								te_gender= '".$dd->te_gender."'
 								te_notes= '".$dd->te_notes."'
 								te_courses_codes= '".$dd->te_courses_codes."'>
								<img src='".base_url()."/public/assets/images/icon/copywriter.png'  /></a>
								<a style='cursor:pointer' class='Del' title='".$dd->$primary_key."'><img src='".base_url()."/public/assets/images/icon/trash.png'  /></a>
						
								
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