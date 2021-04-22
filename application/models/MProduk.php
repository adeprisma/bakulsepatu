<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MProduk extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function count($count)
  {
      $this->db->from('sepatu');
      $this->db->where('kode_kategori', $count);
      return $this->db->count_all_results();
  }

  public function getProduk($kode_kategori)
  {
      $this->db->select('sepatu.*, gambar.*');
      $this->db->join('gambar', 'gambar.id_sepatu = sepatu.id_sepatu');
      $this->db->where('kode_kategori', $kode_kategori);
      $this->db->group_by('sepatu.id_sepatu');
      return $this->db->get('sepatu')->result_array();
  }

}