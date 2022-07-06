<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

  public function index()
  {

    $data["title"] = "Eventku | Gallery";
    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/Gallery', $data);
    $this->load->view('Frontend/layouts/footer');
  }
}
