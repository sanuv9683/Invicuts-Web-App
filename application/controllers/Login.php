<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/6/2018
 * Time: 11:09 PM
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:GET,POST');
header('Access-Control-Allow-Headers, Content-Type');

class Login extends CI_Controller

{

	public function index()
	{
		if ($this->session->has_userdata("admin")) {
			redirect('/Menu/mana');
		} else {
			$this->load->view("login");
		}
	}

	public function log()
	{
		$name = $this->input->post("username");
		$pass = $this->input->post("password");
		if ($name == "admin" && $pass == "admin") {
			$this->session->set_userdata("admin", "on");
			redirect('/Menu/mana');
		} else {
			redirect('/Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('/Login');
	}

}
