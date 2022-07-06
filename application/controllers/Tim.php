<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tim extends CI_Controller
{

  public function index()
  {

    $data["title"] = "Eventku | Tim Kami";
    $this->load->view('Frontend/layouts/header', $data);
    $this->load->view('Frontend/layouts/navbar');
    $this->load->view('Frontend/tim', $data);
    $this->load->view('Frontend/layouts/footer');
  }
}
