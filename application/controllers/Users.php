<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Users';
		// Load model Kegiatan
		$this->load->model('Users_Model', 'user');
		$list_user = $this->user->getAll();
		$data["list_user"] = $list_user;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/User/index', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function view()
	{
		$data['title'] = 'Users';

		$_id = $this->input->get('id');
		$this->load->model('Users_Model', 'user');
		$data["view_user"] = $this->user->findById($_id);

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/User/view', $data);
		$this->load->view('Admin/layouts/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Users';

		$_id = $this->input->get('id');
		$this->load->model('Users_Model', 'user');
		$user_edit = $this->user->findById($_id);

		$data['user_edit'] = $user_edit;

		$this->load->view('Admin/layouts/header', $data);
		$this->load->view('Admin/layouts/sidebar');
		$this->load->view('Admin/layouts/navbar');
		$this->load->view('Admin/User/edit', $data);
		$this->load->view('Admin/layouts/footer');
	}




	public function delete()
	{
		$_id = $this->input->get('id');
		$this->load->model('Users_model', 'kgt');
		$this->kgt->deleteUsers($_id);

		redirect(base_url('Users/index'));
	}
}
