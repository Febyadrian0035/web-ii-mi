<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	public function data()
	{
		$data['judul'] = 'mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';
		$data['isi_tabel'] = $this->Mahasiswa_model->all();

		$this->load->view('admin/v_template', $data);
	}
	public function add(){
		// echo "fungsi tambah";
		$data['judul']='Mahasiswa';
		$data['sub_judul']='Halaman Tambah Mahasiswa';
		$data['halaman']= 'admin/v_tambah_mahasiswa';

		$this->load->view('admin/v_template', $data);
	}
	public function proses_add()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');

		$objek = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama,
			'program_studi' => $prodi);

		if ($this->Mahasiswa_model->create($objek)) {
			// echo 'Berhasil'; 
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/mahasiswa/data');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/mahasiswa/data');
		}

		// var_dump($objek);
	}
	public function Hapus($kode)
	{
		if ($this->Mahasiswa_model->remove($kode)) {
			$this->session->set_flashdata('info','Data Berhasil Dihapus !');
			redirect('admin/mahasiswa/data');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Dihapus !');
			redirect('admin/mahasiswa/data');
		}
	
	

	}
}
 ?>