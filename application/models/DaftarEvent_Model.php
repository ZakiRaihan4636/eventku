<?php

class DaftarEvent_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "daftar";



  public function save($data)
  {
    //insert into
    $sql = "INSERT INTO daftar VALUES (?,?,?,?,?,?,?)";
    $this->db->query($sql, $data);
  }
}
