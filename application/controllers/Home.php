<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function index()
  {

    $data["title"] = "Eventku | Beranda";
    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/Home', $data);
    $this->load->view('Frontend/layouts/footer');
  }
}
