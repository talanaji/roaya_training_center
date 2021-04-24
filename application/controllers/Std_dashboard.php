<?php
class Std_dashboard extends MY_Controller
{
    public function index()
    {
        if ($this->is_loggedin_Std()) {
            $data["page_title"] = $this->lang->line('Std_home');
            $this->load->view('std_templates/header', $data);
            $this->load->view('std_templates/content', $data);
            $this->load->view('std_templates/footer', $data);
        }
    }

    public function view()
    {
        if ($this->is_loggedin_Std()) {
            $data["page_title"] = $this->lang->line('MyAccount');

            $this->load->view('std_templates/header', $data);
            $this->load->view('std_pages/myaccount_vw', $data);
            $this->load->view('std_templates/footer', $data);
        }
    }

    public function std_update()
    {
        if ($this->is_loggedin_Std()) {
            extract($_POST);
            $this->db->where("st_active", 1);
            $this->db->where("st_email", $post_val);
            $query = $this->db->get("students");
            if ($query->num_rows() > 0) {
                $r = $query->result();
                if ($r[0]->st_active == 1) {
                    $arr = array(
                        "st_code" => $r[0]->st_code,
                        "st_name" => $r[0]->st_name,
                        "st_school_code" => $r[0]->st_school_code,
                        "st_class" => $r[0]->st_class,
                        "st_email" => $r[0]->st_email,
                        "st_sex" => $r[0]->st_sex,
                        "st_birthdate" => $r[0]->st_birthdate,
                        "st_ID" => $r[0]->st_ID,
                        "st_phone2" => $r[0]->st_phone2,
                        "st_town" => $r[0]->st_town
                    );
                    $this->session->set_userdata($arr);
                }
            }
        }
    }
}
?>