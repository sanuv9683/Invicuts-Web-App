<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/19/2018
 * Time: 9:02 PM
 */

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods:GET,POST');
//header('Access-Control-Allow-Headers, Content-Type');
class Upload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view('passpaer', array('error' => ' '));
		}

	}

	public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|ppt';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('paper')) {
			$error = array('error' => $this->upload->display_errors());
			echo "Error";
		} else {
			$data = array('upload_data' => $this->upload->data());

			$fileName = $data['upload_data']['file_name'];
			$filePath = $data['upload_data']['full_path'];
			$fileSize = $data['upload_data']['file_size'];
			$fileType = $data['upload_data']['file_type'];

			$year = $this->input->post("yearID");
			$paperID = $this->input->post("paperID");
			$paer = $this->input->post("paper");
			$paerName = $this->input->post("paperName");

			$data = array(
				"papaerID" => $paperID,
				"type" => $paerName,
				"pdfUrl" => $fileName,
				"yearID" => $year,
			);
			$this->Papers->insert_Papaers($data);
			$this->load->view('passpaer');

		}
	}

	public function do_upload2()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|ppt';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('paper')) {
			$error = array('error' => $this->upload->display_errors());
			echo "Error";
		} else {
			$data = array('upload_data' => $this->upload->data());

			$fileName = $data['upload_data']['file_name'];
			$filePath = $data['upload_data']['full_path'];
			$fileSize = $data['upload_data']['file_size'];
			$fileType = $data['upload_data']['file_type'];

			$schID = $this->input->post("schID");
			$paperID = $this->input->post("paperID");
			$paer = $this->input->post("schName");


			$data = array(
				"schemaID" => $schID,
				"papaerID" => $paperID,
				"name" => $paer,
				"purl" => $fileName,
			);
			$this->Schema->insert($data);
			$this->load->view('schema');

		}
	}

	public function getAll()
	{
		$year = $this->input->get("yearID");
		$qury = $this->Papers->get_Papaer($year);
		echo json_encode($qury->result());

	}

	public function getAll2()
	{
		$year = $this->input->get("pid");
		$qury = $this->Schema->getALL($year);
		echo json_encode($qury->result());

	}

	public function schema()
	{
		if (!$this->session->has_userdata("admin")) {
			redirect('/Login');
		} else {
			$this->load->view("schema");
		}

	}
}
