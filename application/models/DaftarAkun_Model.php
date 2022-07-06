<?php

class DaftarAkun_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "users";

  // Fungsi untuk insert 
  public function save($data)
  {
    $sql = "INSERT INTO users VALUES (?,?,MD5(?),?,?,?,?,?)";
    $this->db->query($sql, $data);
  }
}
