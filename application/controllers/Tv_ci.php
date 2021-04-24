<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tv_ci extends MY_Controller
{
    public function index()
    {
        if($this->is_logged != 1)
            redirect('Login');
        $data["page_title"] = $this->lang->line("home_page");
        if ($this->get_users_btnprivs(13, $this->session->userdata('User_code'), $this->session->userdata('User_type')) > 0 || $this->session->userdata('User_type') == 1)
            $data["btn_res_edit"] = 1;
         //$this->load->view('cp/templates/header', $data);
        $this->load->view('cp/tv_vw', $data);
      //  $this->load->view('cp/templates/footer', $data);
    }
    public function get_today_programs()
    {

            $table_join = "";
            $where_join = "";

        $ddd = $this->db->query("select * from 
									reservations , 
											teachers , 
									students , 
									rooms, courses " . $table_join . "
									
			                 where res_teach_code = te_code 
							 and   res_std_code = st_code  
							 and   res_cors_code = c_code  
							 and   res_room_code = room_code " .
            $where_join . "
							  order by res_code desc ")->result();
        foreach($ddd as  $dd )
        {
            $time_start = strtotime($dd->res_time_start);
            $day = date('Y-m-d') ;
            $monthdata =  date('Y-m-d',strtotime($dd->res_time_start)) ;

            if( $monthdata == $day)
            {
                $this->db->select('color');
                $this->db->from('reservation_status');
                $this->db->where('rest_code',$dd->res_is_confirmed);
                $q = $this->db->get()->row()->color;
                //echo $q ;

                echo "<tr class='".$q."'>";
                echo " <td>";
                if(  $dd->res_is_confirmed ==0 && $this->session->userdata('User_type') == 2){
                    echo " <a style='cursor:pointer'  class='Edits' data-toggle='modal' data-target='#myModal'
                                            title= '".$dd->res_code."'
                                            st_name= '".$dd->st_name."'
                                            c_name= '".$dd->c_name."'
                                            res_teach_code= '".$dd->res_teach_code."'
                                            res_cors_code= '".$dd->res_cors_code."'
                                            room_name= '".$dd->room_name."'
                                            res_todate= '".$dd->res_todate."'
                                            res_time_start= '".$dd->res_time_start."'
                                            res_time_end= '".$dd->res_time_end."'
                                            res_paid_price= '".$dd->res_paid_price."'
                                            res_teacher_percent= '".$dd->res_teacher_percent."'
                                            te_ID= '".$dd->te_ID."'
                                            st_ID= '".$dd->st_ID."'
                                            res_room_code= '".$dd->res_room_code."'
                                            res_std_code= '".$dd->res_std_code."'
                                            key= '".$this->session->userdata('User_type')."'
                                            res_teach_note = '".$dd->res_teach_note."' ";
                    echo "res_admin_note= '".$dd->res_admin_note."' ";
                    echo "res_is_confirmed ='".$dd->res_is_confirmed."'";
                    echo ">";
                }
                elseif($this->session->userdata('User_type') == 1){
                    echo " <a style='cursor:pointer'  class='Edits' data-toggle='modal' data-target='#myModal'
								title= '".$dd->res_code."'
								st_name= '".$dd->st_name."'
								c_name= '".$dd->c_name."'
								res_teach_code= '".$dd->res_teach_code."'
								res_cors_code= '".$dd->res_cors_code."'
								room_name= '".$dd->room_name."'
								res_todate= '".$dd->res_todate."'
								res_time_start= '".$dd->res_time_start."'
								res_time_end= '".$dd->res_time_end."'
								res_paid_price= '".$dd->res_paid_price."'
								res_teacher_percent= '".$dd->res_teacher_percent."'
								te_ID= '".$dd->te_ID."'
								st_ID= '".$dd->st_ID."'
								res_room_code= '".$dd->res_room_code."'
								res_std_code= '".$dd->res_std_code."'
								key= '".$this->session->userdata('User_type')."'
								res_teach_note = '".$dd->res_teach_note."' ";

                    echo "res_admin_note= '".$dd->res_admin_note."' ";
                    echo "res_is_confirmed ='".$dd->res_is_confirmed."'";
                    echo ">";
                }
                echo "".$dd->st_name."</td>
                                    <td>".$dd->te_name."</td>
                                    <td>".$dd->c_name."</td>
                                    <td>".$dd->room_name."</td>
                                    <td>".$dd->res_todate."</td>
                                    <td>".$dd->res_time_start."</td>
                                    <td>".$dd->res_time_end."</td>
                                    </tr>";
            }
        }
     }

}

