<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/7/2018
 * Time: 12:30 AM
 */

class SubYears extends CI_Model{

	public function get_allSubYears(){
		$query = $this->db->get("Sub_years");
		return $query;
	}

	public function get_SubYears($segment){
		$query = $this->db->get_where("Sub_years", array("subID" => $segment));
		return $query;
	}

	public function insert_SubYears($data){
		$this->db->insert("Sub_years", $data);
	}

	public function update_SubYears($id, $data){
		$this->db->where("subID", $id);
		$this->db->update("Sub_years", $data);
	}

	public function delete_SubYears($id){
		$this->db->where("subID", $id);
		$this->db->delete("Sub_years");
	}
}
