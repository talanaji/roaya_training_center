<?php
class Common extends CI_Model
{
    public function record_account_count($id=NULL,$name=NULL)
    {
        $this->db->select('COUNT(*) as ctt');
        $this->db->from("training_courses");
        $this->db->where("crs_active" , 1 );
        if($name != NULL)
            $this->db->where("crs_name",$name);
//        if($id != NULL)
//            $this->db->where("p_catid",$id);
        $rc = $this->db->get()->row();
        return $rc->ctt;
    }

    public function fetch_accounts($limit, $start , $id=NULL , $name = NULL ,$orderby_col=NULL , $order_moad=NULL )
    {

        $query = $this->db->query("select * from training_courses,training_categories , subject_photos , photos 
                         where  subject_photos.Rcu_id= training_courses.crs_code 
                                and subject_photos.prefix_type = '".COURSES_PRIFIX."'
                                and subject_photos.Photo_id = photos.P_code 
                                and subject_photos.is_main =  1 
                                and subject_photos.S_active = 1
                                and training_courses.crs_is_preview = 0 
                                and training_courses.tr_cat_code = training_categories.trc_code
                         and training_courses.crs_active = 1  limit $start , $limit  $orderby_col  $order_moad");
         if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}
?>