<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/6/2018
 * Time: 11:08 PM
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:GET,POST');
header('Access-Control-Allow-Headers, Content-Type');
class AboutUs extends CI_Controller
{

	public function index(){
		$this->load->view("about-us");
	}

	public function contactUs(){
		$this->load->view("contact-us");
	}

	public function termsCon(){
		$this->load->view("terms-and-condition");
	}
}
