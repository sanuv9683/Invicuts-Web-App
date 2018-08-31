<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/20/2018
 * Time: 11:16 AM
 */

class Schema extends CI_Model
{

	public function insert($data)
	{
		$this->db->insert("marking-schema", $data);
	}

	public function getALL($data)
	{
		$query = $this->db->get_where("marking-schema", array("papaerID" => $data));
		return $query;
	}

	public function getmax(){
		return $this->db->query("select max(schemaID) as a from  `marking-schema`");
	}
}
