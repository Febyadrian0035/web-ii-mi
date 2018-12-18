<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	
	public function all()
	{
		return $this->db->get('mahasiswa')->result();
	}
	public function get()
	{

	}
	public function create($objek){
		return $this->db->insert('mahasiswa',$objek);
	}
	public function get_id($kode)
	{
		return $this->db->where('nim', $kode)->get('mahasiswa')->row();
	}
}