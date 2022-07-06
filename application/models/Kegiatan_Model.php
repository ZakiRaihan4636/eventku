<?php

class Kegiatan_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "kegiatan";

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function getKegiatan()
  {
    $this->db->select('jenis_kegiatan.*,kegiatan.*')
      ->from('jenis_kegiatan')
      ->join('kegiatan', 'kegiatan.jenis_id = jenis_kegiatan.id');
    $query = $this->db->get();
    return $query->result();
  }


  public function viewKegiatan($id)
  {
    $this->db->select('*')
      ->from('jenis_kegiatan')
      ->join('kegiatan', 'jenis_kegiatan.id = kegiatan.jenis_id', 'inner');
    $this->db->where('kegiatan.id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function DaftarKegiatan($id)
  {
    $this->db->select('*')
      ->from('jenis_kegiatan')
      ->join('kegiatan', 'jenis_kegiatan.id = kegiatan.jenis_id', 'inner');
    $this->db->where('kegiatan.id', $id);
    $query = $this->db->get();
    return $query->row();
  }

  public function findById($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  public function save($data)
  {
    //insert into
    $sql = "INSERT INTO kegiatan (id,judul,kapasitas,harga_tiket,tanggal,narasumber,tempat,pic,foto_flyer,jenis_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $this->db->query($sql, $data);
  }

  public function update($data)
  {
    //update kegiatan
    $sql = "UPDATE kegiatan SET id=?,judul=?,kapasitas=?,harga_tiket=?,tanggal=?,narasumber=?,tempat=?,pic=?,foto_flyer=?,jenis_id=? WHERE id=?";
    $this->db->query($sql, $data);
  }

  public function deleteKegiatan($id)
  {
    //hapus data kegiatan
    $this->db->where('id', $id);
    $query = $this->db->delete($this->table);
    return $query;
  }
}
