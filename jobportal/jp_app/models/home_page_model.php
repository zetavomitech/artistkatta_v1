<?php

class Home_Page_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
     }

     public function update_homepage($id, $data){
     
        $this->db->where('ID', $id);
        $return=$this->db->update('pp_home_page', $data);
		return $return;
    }

    public function update($id, $data){
		$this->db->where('ID', $id);
		$return=$this->db->update('pp_home_page', $data);
		return $return;
	}

    public function get_home_img() {
        $this->db->select('pp_home_page.*');
        $this->db->from('pp_home_page');
		$this->db->where('ID', '1');
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	// public function get_home_img_by_id($id) {
    //     $this->db->select('pp_home_page.*');
    //     $this->db->from('pp_home_page');
	// 	$this->db->where('home_page.ID', $id);
    //     $Q = $this->db->get();
    //     if ($Q->num_rows > 0) {
    //         $return = $Q->row();
    //     } else {
    //         $return = 0;
    //     }
    //     $Q->free_result();
    //     return $return;
    // }

}

?>