<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/7/2018
 * Time: 12:28 AM
 */

class Papers extends CI_Model{
	public function get_allPapaers(){
		$query = $this->db->get("Papers");
		return $query;
	}

	public function get_Papaers($segment){
		$query = $this->db->get_where("Papers", array("papaerID" => $segment));
		return $query;
	}

	public function get_Papaer($segment){
		$query = $this->db->get_where("Papers", array("yearID" => $segment));
		return $query;
	}

	public function insert_Papaers($data){
		$this->db->insert("Papers", $data);
	}

	public function update_Papaers($id, $data){
		$this->db->where("papaerID", $id);
		$this->db->update("Papers", $data);
	}

	public function delete_Papaers($id){
		$this->db->where("papaerID", $id);
		$this->db->delete("Papers");
	}

	public function getmax(){
		return $this->db->query("select max(papaerID) as a from  `Papers`");
	}
}
