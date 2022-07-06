<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarAkun extends CI_Controller
{
  public function index()
  {
    $this->load->view('Frontend/layouts/header');
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/registrasi_akun');
    $this->load->view('Frontend/layouts/footer');
  }

  public function save()
  {
    $this->load->model('DaftarAkun_Model', 'dft');

    $_id = $this->input->post('id');
    $_username = $this->input->post('username');
    $_password = $this->input->post('password');
    $_email = $this->input->post('email');
    $_tanggal = $this->input->post('tanggal');
    $_last_login = $this->input->post('last_login');
    $_status = $this->input->post('status');
    $_role = $this->input->post('role');

    $data_dft[] = $_id;
    $data_dft[] = $_username;
    $data_dft[] = $_password;
    $data_dft[] = $_email;
    $data_dft[] = $_tanggal;
    $data_dft[] = $_last_login;
    $data_dft[] = $_status;
    $data_dft[] = $_role;

    $this->dft->save($data_dft);

    redirect(base_url() . 'Login/index', 'refresh');
  }
}
