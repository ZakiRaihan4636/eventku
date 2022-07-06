<?php

class Pendaftaran_Model extends CI_Model
{

  // Membuat struktur data
  private $table = "daftar";

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function getPendaftaran()
  {
    $this->db->select('daftar.*, daftar.id as id_daftar,users.*,kegiatan.*,kategori_peserta.*')
      ->from('daftar')
      ->join('users', 'users.id = daftar.users_id')
      ->join('kegiatan ', 'kegiatan.id = daftar.kegiatan_id')
      ->join('kategori_peserta ', 'kategori_peserta.id = daftar.kategori_peserta_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function viewPendaftaran($id)
  {
    $this->db->select('daftar.*, daftar.id as id_daftar,users.*,kegiatan.*,kategori_peserta.*')
      ->from('daftar')
      ->join('users', 'users.id = daftar.users_id')
      ->join('kegiatan ', 'kegiatan.id = daftar.kegiatan_id')
      ->join('kategori_peserta ', 'kategori_peserta.id = daftar.kategori_peserta_id');
    $this->db->where('daftar.id', $id);
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
    $sql = "INSERT INTO daftar (id,tanggal_daftar,alasan,user_id,kegiatan_id,kategori_peserta_id,nosertifikat)
        VALUES (?,?,?,?,?,?,?)";
    $this->db->query($sql, $data);
  }

  public function update($data)
  {
    $sql = "UPDATE daftar SET id=?,tanggal_daftar=?,alasan=?,user_id=?,kegiatan_id=?,kategori_peserta=?,nosertifikat=? WHERE id=?";
    $this->db->query($sql, $data);
  }

  public function deletePendaftaran($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->delete($this->table);
    return $query;
  }
}
