<?php
class shape_model extends CI_Model  {


    public function get_all_shapes(){
        $query = $this->db->get("shape");
        return $query->result();
    }

    public function get_description($shape_id){
        $data = array(
          'shape_id'  => $shape_id
        );
        $query = $this->db->get_where("shape", $data);
        return $query->result();
    }
}