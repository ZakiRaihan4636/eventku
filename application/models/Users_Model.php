<?php

class Users_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "users";

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function findById($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  public function update($data)
  {
    //update kegiatan
    $sql = "UPDATE users SET id=?,judul=?,kapasitas=?,harga_tiket=?,tanggal=?,narasumber=?,tempat=?,pic=?,foto_flyer=?,jenis_id=? WHERE id=?";
    $this->db->query($sql, $data);
  }

  public function deleteUsers($id)
  {
    //hapus data kegiatan
    $this->db->where('id', $id);
    $query = $this->db->delete($this->table);
    return $query;
  }


  public function login_admin($uname, $pass)
  {
    $query = $this->db->query("SELECT * FROM users WHERE username='$uname' and password=MD5($pass) LIMIT 1");
    return $query;
  }
  public function login_public($uname, $pass)
  {
    $query = $this->db->query("SELECT * FROM users WHERE username='$uname' and password=MD5($pass) LIMIT 1");
    return $query;
  }
}
