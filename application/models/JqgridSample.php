<?php
class JqgridSample extends CI_Model {

  function getAllData($start,$limit,$sidx,$sord,$where){
    $this->db->select('st_code,st_name,st_class,st_phone1,st_email,st_birthdate,st_town');
    $this->db->limit($limit);
    if($where != NULL)
        $this->db->where($where,NULL,FALSE);
    $this->db->order_by($st_code);
    $query = $this->db->get('students',$limit,$start);

    return $query->result();
  }


?>