<?php
class News_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_news($slug = FALSE){
		if($slug===FALSE){
			$query =$this->db->get('news');
			return $query->result_array();
		}
		$query=$this->db->get_where('news', array('slug'=> $slug));
		return $query->row_array();
		// $query = "SELECT *";
		// $query .= " FROM news ";
		// $query .= " WHERE slug = '" . $slug . " '";
		// $data=$this->db->query($query);

		// if ($data->num_rows() > 0){
		// 	// foreach ($data->result() as $row) {
		// 	// 	return $row->text;
		// 	// }
		// 	return $data;
		// }else {
		// 	$data = "No hay datos";
		// 	return false;
			
		// }
	}
}

