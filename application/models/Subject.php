<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/7/2018
 * Time: 12:29 AM
 */

class Subject extends CI_Model
{
	public function get_allSubjects()
	{
		$query = $this->db->get("Subject");
		return $query;
	}

	public function get_Subjects($segment)
	{
		$query = $this->db->get_where("Subject", array("subID" => $segment));
		return $query;
	}

	public function insert_Subjects($data)
	{
		$this->db->insert("Subject", $data);
	}

	public function update_Subjects($id, $data)
	{
		$this->db->where("subID", $id);
		$this->db->update("Subject", $data);
	}

	public function delete_Subjects($id)
	{
		$this->db->where("subID", $id);
		$this->db->delete("Subject");
	}

	public function getAlSubjects()
	{
		$query = $this->db->query("select * from subject where subStream='AL'");
		return $query;
	}

	public function getOlSubjects()
	{
		$query = $this->db->query("select * from subject where subStream='OL'");
		return $query;
	}

	public function getYrsOfSubs($name){
		$query = $this->db->query("select yearID from sub_years where subID='".$name."';");
		return $query;
	}

	public function get_Subject($segment)
	{
		$query = $this->db->get_where("Subject", array("catoID" => $segment));
		return $query;
	}

	public function getmax(){
		return $this->db->query("select max(subID) as a from subject");
	}
}
