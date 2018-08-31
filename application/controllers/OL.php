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
class OL extends CI_Controller
{
	public function index()
	{
		$this->load->view("ordinary-level");
	}

	public function olsubs()
	{
		$this->load->view("ol-subject-template");
	}

	public function getOLSubs()
	{
		$res = $this->Subject->getOlSubjects();
		echo json_encode($res->result());
	}

}
