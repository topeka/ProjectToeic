<?php 
class Mmain extends CI_Model{
	public function __construct(){
        parent::__construct();
    }
	function get_sharing_ex($id){
		$this->db->select("content");
		$this->db->where("id",$id);
		//$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_listening");
		
		return $query->result_array();
	}
	function get_id_name_sharing_ex($level){
		$this->db->select("id,name");
		$this->db->where("level",$level);
		$this->db->order_by("id","ASC");
		$query=$this->db->get("sharing_listening");
		return $query->result_array();
	}
	public function show_list_video(){

		
	}

	
		
}
?>