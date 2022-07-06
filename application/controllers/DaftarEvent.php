<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarEvent extends CI_Controller
{
  public function index()
  {
    $_id = $this->input->get('id');
    $this->load->model('Kegiatan_Model', 'kgt');
    $data['view_kgt'] = $this->kgt->viewKegiatan($_id);

    $data["title"] = "Daftar Event ";

    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/daftar_event', $data);
    $this->load->view('Frontend/layouts/footer');
  }

  public function save()
  {
    $this->load->model('DaftarEvent_Model', 'dft');

    $_id = $this->input->post('id');
    $_tanggal = $this->input->post('tanggal');
    $_alasan = $this->input->post('alasan');
    $_user_id = $this->input->post('user_id');
    $_kegiatan_id = $this->input->post('kegiatan_id');
    $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
    $_nosertifikat = $this->input->post('nosertifikat');

    $data_dft[] = $_id;
    $data_dft[] = $_tanggal;
    $data_dft[] = $_alasan;
    $data_dft[] = $_user_id;
    $data_dft[] = $_kegiatan_id;
    $data_dft[] = $_kategori_peserta_id;
    $data_dft[] = $_nosertifikat;

    $this->dft->save($data_dft);

    redirect(base_url() . '/Home', 'refresh');
  }
}
