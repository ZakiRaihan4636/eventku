<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisKegiatan extends CI_Controller
{

	public function index()
	{
		// Load model Kegiatan
		$data['title'] = 'Jenis Kegiatan';

		$this->load->model('JenisKegiatan_Model', 'jnskgt');
		$list_jnskgt = $this->jnskgt->getAll();
		$data["list_jnskgt"] = $list_jnskgt;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/JenisKegiatan/index', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function save()
	{
		$this->load->model('JenisKegiatan_Model', 'jnskgt');
		$_id = $this->input->post('id');
		$_nama = $this->input->post('nama');
		$_idedit = $this->input->post('idedit');

		$data_jnskgt[] = $_id;
		$data_jnskgt[] = $_nama;

		if (isset($_idedit)) {
			$data_jnskgt[] = $_idedit;
			$this->jnskgt->update($data_jnskgt);
		} else {
			$this->jnskgt->save($data_jnskgt);
		}

		redirect(base_url() . '/JenisKegiatan/index', 'refresh');
	}

	public function edit()
	{
		$_id = $this->input->get('id');
		$this->load->model('JenisKegiatan_Model', 'jnskgt');
		$jnskgt_edit = $this->jnskgt->findById($_id);

		$data['jnskgt_edit'] = $jnskgt_edit;

		$this->load->view('Admin/layouts/header');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/JenisKegiatan/edit', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('JenisKegiatan_Model', 'jnskgt');
		$this->jnskgt->deleteJenisKegiatan($_id);
		redirect(base_url('JenisKegiatan/index'));
	}
}
