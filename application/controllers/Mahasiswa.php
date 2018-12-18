<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function profil()
	{
		echo "Nama Saya : Feby Adrian <br>";
		echo "NIM Saya : 1700330035 <br>";
		echo "Alamat Saya : MATARAM <br>";
		echo "Email Saya : febyadrian0035@gmail.com <br>";
	}
	public function dosen($param1='')
	{
		echo "Nama Dosenku ".$param1;
	}
	public function krs($semester='',$matkul='')
	{
		echo " semester ke ".$semester." saya mengambil ".$matkul;
	}
	public function data($d='')
	{
		echo "Hello saudara ..."."<br>Nama saya = ".$d."<br>"."<br>"."Salam Lemper ...";
	}
	public function get_semester()
	{
		echo "Semester : 3"."<br>";
	}
}
