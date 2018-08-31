<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/19/2018
 * Time: 9:58 AM
 */

class Menu extends CI_Controller
{
	public function index()
	{
		$munuID = $this->input->get("id");
		$aa = $this->MenuCato->getAll($munuID);
		$data = array(
			"user" => $aa
		);
		$this->load->view("advanced-level", $data);
	}

	public function mana()
	{
		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view("menumanager");
		}

	}

	public function mcato()
	{
		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view("menucatmanager");
		}

	}

	public function getAll()
	{
		$aa = $this->MenuM->getAllMenus();
		$aaa = $aa->result();
		echo json_encode($aaa);
	}

	public function saveMenu()
	{
		$munuID = $this->input->post("menuID");
		$munuName = $this->input->post("menuName");
		$customer = array(
			"menuID" => $munuID,
			"menuName" => $munuName
		);
		$this->MenuM->save($customer);
		$this->load->view('menumanager');
	}

	public function saveMenuCato()
	{
		$munuID = $this->input->post("menuID");
		$sid = $this->input->post("sid");
		$munuStream = $this->input->post("stream");
		$customer = array(
			"catoID" => $sid,
			"catoType" => $munuStream,
			"menuID" => $munuID
		);
		$this->MenuCato->save($customer);
		$this->load->view('menucatmanager');
	}

	public function getAllCato()
	{
		$munuID = $this->input->get("menuID");
		$aa = $this->MenuCato->getAll($munuID);
		echo json_encode($aa);
	}



}
