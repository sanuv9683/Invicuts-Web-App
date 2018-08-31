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
class AL extends CI_Controller
{
	public function index()
	{
		$this->load->view("advanced-level");
	}

	public function alsubs()
	{
		$this->load->view("al-subject-template");
	}

	public function getAlSub()
	{
		$query = $this->Subject->getAlSubjects();
		echo json_encode($query->result());
	}



}
