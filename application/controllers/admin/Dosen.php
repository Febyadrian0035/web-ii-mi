<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
	}
	public function index()
	{
		$data['judul'] = 'dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_dosen';
		$data['isi_tabel'] = $this->Dosen_model->all();

		$this->load->view('admin/v_template', $data);
	}
	public function add(){
		// echo "fungsi tambah";
		$data['judul']='Dosen';
		$data['sub_judul']='Halaman Tambah Dosen';
		$data['halaman']= 'admin/v_tambah_dosen';

		$this->load->view('admin/v_template', $data);
	}
	public function proses_add()
	{
		$objek = array(
			'nik' => $this->input->post('nik'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'alamat' => $this->input->post('alamat')
		);

		$this->Dosen_model->create($objek); 
		redirect('admin/dosen','refresh');
		// var_dump($objek);
	}
	public function Hapus($nik)
	{
		$this->Dosen_model->remove($nik);
		redirect('admin/dosen','refresh');
	}
	public function edit($nik)
	{
		$data['judul']='Dosen';
		$data['sub_judul']='Edit Data Dosen';
		$data['halaman']= 'admin/v_edit_dosen';

		$data['isi_data']= $this->Dosen_model->get_id($nik);

		$this->load->view('admin/v_template', $data);
	}
	public function proses_edit()
	{
		$id = $this->input->post('nik');
		$objek = array(
			'nama_dosen' => $this->input->post('nama_dosen'),
			'alamat' => $this->input->post('alamat')
		);

		$this->Dosen_model->update($id, $objek);
		redirect('admin/dosen','refresh');
		

		// var_dump($objek);
	}
}
 ?>