<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Kegiatan';
		// Load model Kegiatan
		$this->load->model('Kegiatan_Model', 'kgt');
		$list_kgt = $this->kgt->getKegiatan();
		$data["list_kgt"] = $list_kgt;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/Kegiatan/index', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function view()
	{

		$_id = $this->input->get('id');
		$this->load->model('Kegiatan_Model', 'kgt');
		$data['view_kgt'] = $this->kgt->viewKegiatan($_id);

		$data['title'] = 'View data kegiatan';

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/Kegiatan/view', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Kegiatan';

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/Kegiatan/create');
		$this->load->view('Admin/layouts/footer');
	}

	public function save()
	{
		$this->load->model('Kegiatan_Model', 'kgt');

		$_id = $this->input->post('id');
		$_judul = $this->input->post('judul');
		$_kapasitas = $this->input->post('kapasitas');
		$_harga_tiket = $this->input->post('harga_tiket');
		$_tanggal = $this->input->post('tanggal');
		$_narasumber = $this->input->post('narasumber');
		$_tempat = $this->input->post('tempat');
		$_pic = $this->input->post('pic');
		$_foto = $_FILES['foto'];
		$_jenis_kegiatan = $this->input->post('jenis_kegiatan');
		$_idedit = $this->input->post('idedit');

		if ($_foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				echo "upload foto gagal";
			} else {
				$_foto = $this->upload->data('file_name');
			}
		}

		$data_kgt[] = $_id;
		$data_kgt[] = $_judul;
		$data_kgt[] = $_kapasitas;
		$data_kgt[] = $_harga_tiket;
		$data_kgt[] = $_tanggal;
		$data_kgt[] = $_narasumber;
		$data_kgt[] = $_tempat;
		$data_kgt[] = $_pic;
		$data_kgt[] = $_foto;
		$data_kgt[] = $_jenis_kegiatan;

		if (isset($_idedit)) {
			$data_kgt[] = $_idedit;
			$this->kgt->update($data_kgt);
		} else {
			$this->kgt->save($data_kgt);
		}

		redirect(base_url() . '/Kegiatan/index', 'refresh');
	}

	public function edit()
	{
		$_id = $this->input->get('id');
		$this->load->model('Kegiatan_Model', 'kgt');
		$kgt_edit = $this->kgt->findById($_id);

		$data['title'] = 'Update data kegiatan';

		$data['kgt_edit'] = $kgt_edit;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/Kegiatan/edit', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('Kegiatan_Model', 'kgt');
		$this->kgt->deleteKegiatan($_id);
		redirect(base_url('Kegiatan/index'));
	}
}
