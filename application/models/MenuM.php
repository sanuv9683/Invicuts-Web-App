<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/19/2018
 * Time: 1:54 PM
 */

class MenuM extends CI_Model
{

	public function save($data){
		$this->db->insert("menuitem", $data);
	}

	public function getAllMenus(){
		$query=$this->db->get("menuitem");
		return $query;
	}



	public function getmax(){
		return $this->db->query("select max(menuID) as a from  `menuitem`");
	}


}
