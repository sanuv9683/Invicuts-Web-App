<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sanu AK
 * Date: 7/20/2018
 * Time: 3:00 PM
 */

class MaxID extends CI_Controller
{

	public function getmmax()
	{
		$query=$this->MenuM->getmax()->result();
		echo json_encode($query);
	}
	public function getmcmax()
	{
		$query=$this->MenuCato->getmax()->result();
		echo json_encode($query);
	}
	public function getmsmax()
	{
		$query=$this->Schema->getmax()->result();
		echo json_encode($query);
	}
	public function getpmax()
	{
		$query=$this->Papers->getmax()->result();
		echo json_encode($query);
	}
	public function getsmax()
	{
		$query=$this->Subject->getmax()->result();
		echo json_encode($query);
	}
	public function getymax()
	{
		$query=$this->Years->getmax()->result();
		echo json_encode($query);
	}
}
