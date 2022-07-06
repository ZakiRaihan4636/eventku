<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriPeserta extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Kategori Peserta';
		// Load model Kegiatan
		$this->load->model('KategoriPeserta_Model', 'ktgpst');
		$list_ktgpst = $this->ktgpst->getAll();
		$data["list_ktgpst"] = $list_ktgpst;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/KategoriPeserta/index', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function save()
	{
		$this->load->model('KategoriPeserta_Model', 'kgtpst');
		$_id = $this->input->post('id');
		$_nama = $this->input->post('nama');
		$_idedit = $this->input->post('idedit');

		$data_kgtpst[] = $_id;
		$data_kgtpst[] = $_nama;

		if (isset($_idedit)) {
			$data_kgtpst[] = $_idedit;
			$this->kgtpst->update($data_kgtpst);
		} else {
			$this->kgtpst->save($data_kgtpst);
		}

		redirect(base_url() . '/KategoriPeserta/index', 'refresh');
	}

	public function edit()
	{
		$_id = $this->input->get('id');
		$this->load->model('KategoriPeserta_Model', 'kgtpst');
		$kgtpst_edit = $this->kgtpst->findById($_id);

		$data['kgtpst_edit'] = $kgtpst_edit;

		$this->load->view('Admin/layouts/header');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/KategoriPeserta/edit', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('KategoriPeserta_Model', 'kgtpst');
		$this->kgtpst->deleteKategoriPeserta($_id);
		redirect(base_url('KategoriPeserta/index'));
	}
}
