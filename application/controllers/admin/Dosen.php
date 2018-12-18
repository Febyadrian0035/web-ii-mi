<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
	}
	public function data()
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
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$objek = array(
			'nik' => $nik,
			'nama_dosen' => $nama,
			'alamat' => $alamat
		);

		if ($this->Dosen_model->create($objek)) {
			// echo 'Berhasil'; 
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/dosen/data');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/dosen/data');
		}

		// var_dump($objek);
	}
	public function Hapus($kode)
	{
		if ($this->Dosen_model->remove($kode)) {
			$this->session->set_flashdata('info','Data Berhasil Dihapus !');
			redirect('admin/dosen/data');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Dihapus !');
			redirect('admin/dosen/data');
		}
	
	

	}
}
 ?>