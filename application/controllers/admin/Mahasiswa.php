<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	public function index()
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
		$objek = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'program_studi' => $this->input->post('program_studi')
		);

		$this->Mahasiswa_model->create($objek);
			redirect('admin/mahasiswa','refresh');
		

		// var_dump($objek);
	}
	public function Hapus($nim)
	{
		$this->Mahasiswa_model->remove($nim); 
		redirect('admin/mahasiswa','refresh');
	}
	public function edit($nim)
	{
		$data['judul']='Mahasiswa';
		$data['sub_judul']='Edit Data Mahasiswa';
		$data['halaman']= 'admin/v_edit_mahasiswa';

		$data['isi_data']= $this->Mahasiswa_model->get_id($nim);

		$this->load->view('admin/v_template', $data);
	}
	public function proses_edit()
	{
		$id = $this->input->post('nim');
		$objek = array(
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'program_studi' => $this->input->post('program_studi')
		);

		$this->Mahasiswa_model->update($id, $objek);
		redirect('admin/mahasiswa','refresh');
		

		// var_dump($objek);
	}
}
 ?>