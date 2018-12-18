<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function data($d='')
	{
		echo "Hello saudara ..."."<br>Nama saya = ".$d."<br>"."<br>"."Salam Lemper ...";
	}
}
