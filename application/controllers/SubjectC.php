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

class SubjectC extends CI_Controller
{
	public function index()
	{
		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view("submanage");
		}

	}

	public function year()
	{
		$d = $this->Years->get_all();
		echo json_encode($d->result());
//		foreach ($d->result() as $row) {
//			echo $row->yearID;
//		}
	}


	public function getSy()
	{
		$strm = $this->input->get(trim(strip_tags('id')));
		$res = $this->Years->get_Years($strm);
		echo json_encode($res->result());
	}


	public function getSubFromCato()
	{
		$catoID = $this->input->get("catoID");
		$query = $this->Subject->get_Subject($catoID);
		echo json_encode($query->result());
	}

	public function save()
	{
		$stream = $this->input->post("stream");
		$subid = $this->input->post("subid");
		$subName = $this->input->post("subName");
		$subTag = $this->input->post("subtag");
		$data = array(
			"subID" => $subid,
			"subName" => $subName,
			"subStream" => $stream,
			"tag" => $subTag,
			"catoID" => $stream
		);

		$this->Subject->insert_Subjects($data);
		$this->load->view("submanage");

	}

	public function sub_year()
	{

		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view("subyear");
		}
	}

	public function saveYear()
	{
		$sub = $this->input->post("sub");
		$yearID = $this->input->post("yearid");
		$yearName = $this->input->post("yearName");

		$data = array(
			"yearID" => $yearID,
			"subID" => $sub,
			"yearName" => $yearName
		);

		$this->Years->insert_Year($data);
		$this->load->view("subyear");
	}

}
