<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function index()
	{

		$data['title'] = 'Pendaftaran';
		// Load model Kegiatan
		$this->load->model('Pendaftaran_Model', 'pdft');
		$list_pdft = $this->pdft->getPendaftaran();
		$data["list_pdft"] = $list_pdft;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/Pendaftaran/index', $data);
		$this->load->view('Admin/layouts/footer');
	}



	public function view()
	{
		$data['title'] = 'View Data Pendaftaran';

		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdft');
		$data['view_pdft'] = $this->pdft->viewPendaftaran($_id);

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/Pendaftaran/view', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Pendaftaran';

		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdft');
		$pdft_edit = $this->pdft->viewPendaftaran($_id);

		$data['pdft_edit'] = $pdft_edit;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/Pendaftaran/edit', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('Pendaftaran_Model', 'pdft');
		$this->pdft->deletePendaftaran($_id);
		redirect(base_url('Pendaftaran/index'));
	}
}
