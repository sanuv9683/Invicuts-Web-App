<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/7/2018
 * Time: 12:27 AM
 */

class Years extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get("Years");
		return $query;
	}

	public function get_Years($segment)
	{
		$query = $this->db->get_where("Years", array("subID" => $segment));
		return $query;
	}

	public function insert_Year($data)
	{
		$this->db->insert("Years", $data);
	}

	public function update_Year($id, $data)
	{
		$this->db->where("yearID", $id);
		$this->db->update("Years", $data);
	}

	public function delete_Year($id)
	{
		$this->db->where("yearID", $id);
		$this->db->delete("Years");
	}

	public function getAllYearsSub($id)
	{
		$ss = $this->db->query("Select * from years where yearID='" . $id . "'");
		return $ss;
	}

	public function getmax(){
		return $this->db->query("select max(yearID) as a from years");
	}
}
