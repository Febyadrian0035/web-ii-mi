<?php 
class Pengumuman extends CI_Controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Pengumuman_model');
	}
	public function index()
	{
		// echo "Admin / home";

		$data['judul']='Pengumuman';
		$data['sub_judul']='Halaman Pengumuman';
		$data['halaman']= 'admin/v_pengumuman';
		$data['isi_tabel']= $this->Pengumuman_model->all();
		// $isi_tabel=$this->Pengumuman_model->all();
		// print_r($isi_tabel);

		$this->load->view('admin/v_template', $data);
	}
	public function tambah(){
		// echo "fungsi tambah";
		$data['judul']='Tambah Pengumuman';
		$data['sub_judul']='Tambah Pengumuman';
		$data['halaman']= 'admin/v_tambah_pengumuman';

		// $data['isi_tabel']= $this->Pengumuman_model->all();;
		// $isi_tabel=$this->Pengumuman_model->all();
		// print_r($isi_tabel);

		$this->load->view('admin/v_template', $data);
	}
	public function proses_tambah()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		);

		if ($this->Pengumuman_model->create($objek)) {
			// echo 'Berhasil'; 
			$this->session->set_flashdata('info','Data Berhasil Disimpan !');
			redirect('admin/pengumuman');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Disimpan !');
			redirect('admin/pengumuman');
		}

		// var_dump($objek);
	}
	public function Hapus($kode)
	{
		if ($this->Pengumuman_model->remove($kode)) {
			$this->session->set_flashdata('info','Data Berhasil Dihapus !');
			redirect('admin/pengumuman');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal Dihapus !');
			redirect('admin/pengumuman');
		}
	}
	public function Edit($id)
	{
		// echo 'Funsi Tambah';

		$data['judul']='Edit Pengumuman';
		$data['sub_judul']='Edit Pengumuman';
		$data['halaman']= 'admin/v_edit_pengumuman';

		$data['edit_tabel']= $this->Pengumuman_model->get_id($id);

		// var_dump($data);

		$this->load->view('admin/v_template', $data);
	}
	public function proses_edit()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');
		$id = $this->input->post('id_pengumuman');

		$objek = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis
		);

		if ($this->Pengumuman_model->update($id, $objek)) {
			// echo 'Berhasil'; 
			$this->session->set_flashdata('info','Data Berhasil di Update !');
			redirect('admin/pengumuman');
		}else{
			// echo 'Gagal';
			$this->session->set_flashdata('info','Data Gagal di Update !');
			redirect('admin/pengumuman');
		}

	}

}

 ?>