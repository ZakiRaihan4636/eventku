<?php

class KategoriPeserta_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "kategori_peserta";

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
    $sql = "INSERT INTO kategori_peserta VALUES (?,?)";
    $this->db->query($sql, $data);
  }

  public function update($data)
  {
    $sql = "UPDATE kategori_peserta SET id=?,nama=? WHERE id=?";
    $this->db->query($sql, $data);
  }

  public function deleteKategoriPeserta($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->delete($this->table);
    return $query;
  }
}
