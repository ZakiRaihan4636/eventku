<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function index()
  {

    $data = [];

    $data['title'] = "Login";

    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/login', $data);
    $this->load->view('Frontend/layouts/footer');
  }

  public function otentikasi()
  {

    $this->load->model("Users_Model", "user");

    $_username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
    $_password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
    $cek_admin = $this->user->login_admin($_username, $_password);
    $data = $this->db->get('users')->num_rows();
    $cek_admin = $this->user->login_admin($_username, $_password);

    // if (isset($row)) { // Jika username terdaftar di database
    // $this->session->set_userdata('id', $row->id);
    // $this->session->set_userdata('USERNAME', $row->username);
    // $this->session->set_userdata('ROLE', $row->role);
    // $this->session->set_userdata('USER', $row);

    //   if($this->userdata)
    //   redirect(base_url() . 'Dashboard');
    // } else { //JIka user tidak (username password salah)
    //   redirect(base_url() . 'login?status=f');
    // }

    if ($cek_admin->num_rows() > 0) { //jika login sebagai dosen
      $data = $cek_admin->row_array();
      $this->session->set_userdata('masuk', TRUE);
      if ($data['role'] == 'administrator') { //Akses admin
        $this->session->set_userdata('ID', $data['id']);
        $this->session->set_userdata('USERNAME', $data['username']);
        $this->session->set_userdata('ROLE', $data['role']);
        redirect('Dashboard');
      } else { //jika login sebagai mahasiswa
        $cek_admin = $this->user->Login_admin($_username, $_password);
        if ($cek_admin->num_rows() > 0) {
          $data = $cek_admin->row_array();
          $this->session->set_userdata('masuk', TRUE);
          $this->session->set_userdata('ID', $data['id']);
          $this->session->set_userdata('USERNAME', $data['username']);
          $this->session->set_userdata('ROLE', $data['role']);
          redirect('event');
        }
      }
    } else {  // jika username dan password tidak ditemukan atau salah
      redirect(base_url() . 'login?status=f');
      $this->session->set_userdata('keluar', FALSE);

      // }
    }
  }


  public function logout()
  {
    $this->session->unset_userdata('USERNAME');
    $this->session->unset_userdata('ROLE');
    $this->session->unset_userdata('USER');
    redirect(base_url() . 'Login');
  }
}
