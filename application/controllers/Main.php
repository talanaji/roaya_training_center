<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

   public function index()
        {
              /*  $data["page_title"] = $this->lang->line("home_page");
                    $data["newest_dawrat"] = $this->db->query("select * from training_courses,training_categories , subject_photos , photos 
                         where  subject_photos.Rcu_id= training_courses.crs_code 
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code 
                                and subject_photos.is_main =  1 
                                and subject_photos.S_active = 1
                                and training_courses.crs_is_preview = 1 
                                and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1")->row();*/
                //            $data["latest4dawrat"] = $this->db->query("select * from training_courses,training_categories , subject_photos , photos
//                         where  subject_photos.Rcu_id= training_courses.crs_code
//                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
//                                and subject_photos.Photo_id = photos.P_code
//                                and subject_photos.is_main =  1
//                                and subject_photos.S_active = 1
//                                and training_courses.crs_is_preview = 0
//                                and training_courses.tr_cat_code = training_categories.trc_code
//                         and training_courses.crs_active = 1  ")->result();
              $data["page_title"] = $this->lang->line('all_corses');
              //            $config["base_url"] = base_url() . "Main/index/";
//            $config["total_rows"] = $this->Common->record_account_count($id,NULL);
//            $config["per_page"] = 6;
//            $config["uri_segment"] = 4;
//            $choice = $config["total_rows"] / $config["per_page"];
//            $config["num_links"] = round($choice);
//            $config['full_tag_open'] = '<div class="nicdark_section nicdark_text_align_center">';
//            $config['full_tag_close'] = '</div><!--pagination-->';
             //            $config['first_link'] = '&laquo; الاولى';
//            $config['first_tag_open'] = '<li class="prev page">';
//            $config['first_tag_close'] = '</li>';
//
//            $config['last_link'] = 'التالي &raquo;';
//            $config['last_tag_open'] = '<li class="next page">';
//            $config['last_tag_close'] = '</li>';
//
//            $config['next_link'] = 'الاخيرة &rarr;';
//            $config['next_tag_open'] = '<li class="next page">';
//            $config['next_tag_close'] = '</li>';
//
//            $config['prev_link'] = '&larr; الاولى';
//            $config['prev_tag_open'] = '<li class="prev page">';
//            $config['prev_tag_close'] = '</li>';
               //            $config['cur_tag_open'] = '<a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>';
//            $config['cur_tag_close'] = '</strong></a>';
//
//            $config['num_tag_open'] = '<a class="nicdark_display_inline_block nicdark_color_greydark nicdark_first_font nicdark_padding_10 nicdark_font_size_20" href="#"><strong>';
//            $config['num_tag_close'] = '</strong></a>';
//          //  $this->pagination->initialize($config);
//
//            $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            //$data["results"] = $this->Common->fetch_accounts($config["per_page"], $page ,$id ,NULL,"crs_code","DESC");
           // $data["links"] = $this->pagination->create_links();
            $data["results"] =$this->db->query("select * from training_courses,training_categories , subject_photos , photos 
                         where  subject_photos.Rcu_id= training_courses.crs_code 
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code 
                                and subject_photos.is_main =  1 
                                and subject_photos.S_active = 1
                                and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1 ")->result();
              $this->load->view('templates/header',$data );
               $this->load->view('courses',$data );
               $this->load->view('templates/footer',$data );

        }
   public function getSimilarPost($crs_code)
    {
        $query = $this->db->get_where('training_courses',array('crs_code' => $crs_code));
        foreach($query->result() as $row){ $tags = $row->crs_keywords; }
        $match =  explode(',', $tags);
        $result = [];
      for($i = 0; $i < count($match); $i++)
        {
             $sqlQuery = $this->db->query("select DISTINCT crs_code, crs_name , P_photo , crs_details ,crs_show_price ,crs_price,crs_hours,crs_date from training_courses,training_categories , subject_photos , photos
                         where  subject_photos.Rcu_id= training_courses.crs_code
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code
                                and subject_photos.is_main =  1
                                and subject_photos.S_active = 1
                                and  training_courses.crs_keywords like '%".$match[$i]."%'
                                and  training_courses.crs_code <> '".$crs_code."'
                                and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1  limit 1 ");
            if($sqlQuery->num_rows()>0)
                $result[] = $sqlQuery->result();
        }

         return array_unique($result, SORT_REGULAR);
    }
    public function singlecourse($crs_code=NULL)
    {
        if($crs_code == NULL)
            redirect("Main");
        $data["sub_photos"] = $this->get_photos($crs_code  , COURSES_PRIFIX , 1);
        $data["sub_docs"] = $this->get_photos($crs_code  , COURSES_DOCS_PRIFIX , 1);
        $data["newest_dawrat"] = $this->db->query("select * from training_courses,training_categories , subject_photos , photos 
                         where  subject_photos.Rcu_id= training_courses.crs_code 
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code 
                                and subject_photos.is_main =  1 
                                and subject_photos.S_active = 1
                                 and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1
                         and  training_courses.crs_code='".$crs_code."'")->row();


        $data["trainers"] = $this->db->query("select * from teachers,teachers_trainigs
                                              where teachers_trainigs.tt_te_code = teachers.te_code 
                                              and   teachers_trainigs.tt_crs_code = '".$data["newest_dawrat"]->crs_code."' ")->result();


        $data["page_title"] = $data["newest_dawrat"]->crs_name;
        $data["related_posts"] = $this->getSimilarPost($crs_code);
        $this->load->view('templates/header',$data );
        $this->load->view('single-course',$data );
        $this->load->view('templates/footer',$data );
    }
    public function courses($crs_code=NULL)
    {
        if($crs_code == NULL)
            redirect("Main");
        $data["newest_dawrat"] = $this->db->query("select * from training_courses,training_categories ,teachers, subject_photos , photos 
                         where  subject_photos.Rcu_id= training_courses.crs_code 
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code 
                                and subject_photos.is_main =  1 
                                and subject_photos.S_active = 1
                                 and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1
                         and training_courses.crs_author= teachers.te_code
                         and  training_courses.crs_code='".$crs_code."'")->row();
        $data["page_title"] = $data["newest_dawrat"]->crs_name;
        $this->load->view('templates/header',$data );
        $this->load->view('courses',$data );
        $this->load->view('templates/footer',$data );
    }
    public function add_comment()
    {
        extract($_POST);

        if($this->session->userdata('Std_code') != '' || !empty($this->session->userdata('Std_code')))
            $vr = $this->session->userdata('Std_code');
        else
            $vr = "1";


        if(empty($comm_name)) {
            echo $this->lang->line('enter_comm_name');exit;
        }if(empty($comm_email)) {
            echo $this->lang->line('enter_comm_email');exit;
        }if(empty($comm_title)) {
            echo $this->lang->line('enter_comm_title');exit;
        }if(empty($comm_txt)) {
            echo $this->lang->line('enter_comm_txt');exit;
        }


        $arr = array(
              "comm_name"=> $comm_name.' '.$comm_name1,
              "comm_email" => $comm_email ,
              "comm_title" => $comm_title ,
              "comm_txt" => $comm_txt,
              "comm_crs_code" => $crs_code,
              "comm_user_code" => $vr ,
              "comm_date"=> date('Y-m-d h:i'),
              "comm_is_show"=> 0
        );
        if($this->db->insert("comments",$arr))
        {
            echo $this->lang->line("success_done");
            exit;
        }
    }
    public function getcomments($crs_code)
    {
        $this->db->where("comm_is_show" , 1 );
        $this->db->where("comm_crs_code" , $crs_code );

        $rs = $this->db->get("comments")->result();
        echo json_encode($rs);
    }
    public function swithlang()
    {
        extract($_POST);
        if($key_post == 'en')
        {
            $this->session->unset_userdata('lang');
            $this->lang->load("cperm","english");
            $this->session->set_userdata("lang","english");
            echo 1;
        }
        else{
            $this->session->unset_userdata('lang');
            $this->lang->load("cperm","arabic");
            $this->session->set_userdata("lang","arabic");
            echo 1;
        }
        echo 0;
    }
}

