<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

  public function index()
  {
    $this->load->model('Kegiatan_Model', 'kgt');
    $list_kgt = $this->kgt->getKegiatan();
    $data["list_kgt"] = $list_kgt;

    $data["title"] = "Eventku | Event";
    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/event', $data);
    $this->load->view('Frontend/layouts/footer');
  }

  public function view()
  {
    $_id = $this->input->get('id');
    $this->load->model('Kegiatan_Model', 'kgt');
    $data['view_kgt'] = $this->kgt->viewKegiatan($_id);

    $this->load->view('Frontend/layouts/header');
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/detail_event', $data);
    $this->load->view('Frontend/layouts/footer');
  }
}
