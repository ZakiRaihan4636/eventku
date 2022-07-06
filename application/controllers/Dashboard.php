<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {


    $data['title'] = 'Dashboard';

    $data['pendaftaran'] = $this->db->get('daftar')->num_rows();
    $data['kegiatan'] = $this->db->get('kegiatan')->num_rows();
    $data['jenis_kegiatan'] = $this->db->get('jenis_kegiatan')->num_rows();
    $data['kategori_peserta'] =  $this->db->get('kategori_peserta')->num_rows();
    $data['users'] = $this->db->get('users')->num_rows();

    $this->load->view('Admin/layouts/header', $data);
    $this->load->view('Admin/layouts/sidebar');
    $this->load->view('Admin/layouts/navbar');
    $this->load->view('Admin/dashboard.php', $data);
    $this->load->view('Admin/layouts/footer');
  }
}
