<?php

class Dashboard_Model extends CI_Model
{


  // Fungsi untuk melihat seluruh isi dari table
  public function getAll()
  {
    $query = $this->db->get('dbeventorganizer.*');
    return $query->result();
  }
}
