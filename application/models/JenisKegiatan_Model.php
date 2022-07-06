<?php

class JenisKegiatan_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "jenis_kegiatan";

  // Fungsi untuk melihat seluruh isi dari table
  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }

  // Fungsi Untuk Menemukan berdasarkan dengan id
  public function findByid($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  // Fungsi untuk insert 
  public function save($data)
  {
    $sql = "INSERT INTO jenis_kegiatan VALUES (?,?)";
    $this->db->query($sql, $data);
  }

  public function update($data)
  {
    $sql = "UPDATE jenis_kegiatan SET id=?,nama=? WHERE id=?";
    $this->db->query($sql, $data);
  }

  public function deleteJenisKegiatan($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->delete($this->table);
    return $query;
  }
}
