<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/19/2018
 * Time: 3:20 PM
 */

class MenuCato extends CI_Model
{

	public function save($data)
	{
		$this->db->insert("menucato",$data);
	}

	public function getAll($name)
	{
		return $this->db->get_where("menucato",array("menuID"=>$name))->result();
	}

	public function getmax(){
		return $this->db->query("select max(catoID) as a from menucato");
	}
}
