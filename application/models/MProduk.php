<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MProduk extends CI_Model
{

  public function __construct() {
    parent::__construct();
  }

  public function count($count) {
      $this->db->from('sepatu');
      $this->db->where('kode_kategori', $count);
      return $this->db->count_all_results();
  }

  public function getSemuaProduk($limit, $start) {
    $sql = $this->db->query("SELECT * FROM sepatu JOIN gambar on gambar.id_sepatu = sepatu.id_sepatu\n"
                              . "JOIN kategori on kategori.kode_kategori = sepatu.kode_kategori\n"
                              . "GROUP BY gambar.id_sepatu\n"
                              . "ORDER BY sepatu.nama_sepatu and sepatu.status\n"
                              . "LIMIT $limit\n"
                              . "OFFSET $start\n");
    return $sql->result_array();
  }

  public function getProduk($kode_kategori, $per_page, $start) {
    $this->db->select('sepatu.*, kategori.*, gambar.*');
    $this->db->join('kategori', 'kategori.kode_kategori = sepatu.kode_kategori');
    $this->db->join('gambar', 'gambar.id_sepatu = sepatu.id_sepatu');
    $this->db->where('sepatu.kode_kategori', $kode_kategori);
    $this->db->group_by('sepatu.id_sepatu');
    return $this->db->get('sepatu', $per_page, $start)->result_array();
  }

  public function getKategori()
  {
    return $this->db->get('kategori')->result();
  }

  public function getModel()
  {
    return $this->db->get('model')->result();
  }

  public function getkategori_warna()
  {
    return $this->db->get('warna')->result();
  }

  public function addSepatu()
  {
    $kategori = $this->input->post('kategori');
    $nama_sepatu = $this->input->post('nama_sepatu');
    
    $this->db->join('kategori', 'kategori.kode_kategori = sepatu.kode_kategori');
    $this->db->where('sepatu.kode_kategori', $kategori);
    $this->db->limit(1);
    $this->db->order_by('id_sepatu', 'desc');
    $query = $this->db->get('sepatu')->row();
    
    if ($query != null )
    {
      $id = $query->id_sepatu + 1;
      $group = $query->nama_kategori;
    }
    else
    {
      if ($kategori == 0)
      {
        $id = 4401;
        $group = 'kids';
      }
      if ($kategori == 1)
      {
        $id = 5501;
        $group = 'wanita';
      }
      if ($kategori == 2)
      {
        $id =6601;
        $group = 'pria';
      }
    }
    
    $data = [
      "id_sepatu" => $id,
      "nama_sepatu" => $this->input->post('nama_sepatu'),
      "kode_kategori" => $kategori,
      "kode_model" => $this->input->post('model'),
      "status" => $this->input->post('status'),
      "harga" => $this->input->post('harga')
    ];
    $this->db->insert('sepatu', $data);

    //Upload Gambar
    if(is_dir("assets/img/sepatu/$group/$id - $nama_sepatu") == false)
    {
      mkdir("assets/img/sepatu/$group/$id - $nama_sepatu");
    }
    $config['upload_path']          = 'assets/img/sepatu/'.$group.'/'.$id.' - '.$nama_sepatu.'/';
		$config['allowed_types']        = '*';
		$config['encrypt_name']        = TRUE;
		$this->load->library('upload', $config);
    $jumlah = count($_FILES['tampak_kanan']['name']);
    $kode_warna = $this->input->post('kategori_warna');
    $nama_warna = $this->input->post('nama_warna');

    for ($i = 0; $i < $jumlah; $i++)
    {
      if (!empty($_FILES['tampak_kanan']['name'][$i]))
      {
        $_FILES['file']['name'] = $_FILES['tampak_kanan']['name'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['tampak_kanan']['tmp_name'][$i];
				$_FILES['file']['size'] = $_FILES['tampak_kanan']['size'][$i];
				$this->upload->do_upload('file');
				$gambarkanan[$i] = $this->upload->data('file_name');
      }
      else{$gambarkanan[$i] = null;}

      if (!empty($_FILES['tampak_kiri']['name'][$i]))
      {
        $_FILES['file']['name'] = $_FILES['tampak_kiri']['name'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['tampak_kiri']['tmp_name'][$i];
        $_FILES['file']['size'] = $_FILES['tampak_kiri']['size'][$i];
				$this->upload->do_upload('file');
				$gambarkiri[$i] = $this->upload->data('file_name');
      }
      else{$gambarkiri[$i] = null;}

      if (!empty($_FILES['tampak_depan']['name'][$i]))
      {
        $_FILES['file']['name'] = $_FILES['tampak_depan']['name'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['tampak_depan']['tmp_name'][$i];
        $_FILES['file']['size'] = $_FILES['tampak_depan']['size'][$i];
				$this->upload->do_upload('file');
				$gambardepan[$i] = $this->upload->data('file_name');
      }
      else{$gambardepan[$i] = null;}

      if (!empty($_FILES['tampak_belakang']['name'][$i]))
      {
        $_FILES['file']['name'] = $_FILES['tampak_belakang']['name'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['tampak_belakang']['tmp_name'][$i];
        $_FILES['file']['size'] = $_FILES['tampak_belakang']['size'][$i];
				$this->upload->do_upload('file');
				$gambarbelakang[$i] = $this->upload->data('file_name');
      }
      else{$gambarbelakang[$i] = null;}
    }

    $no = 0;
    $urutan = 1;
    foreach ($nama_warna as $row)
    {
      $dataBatch[] = [
        "id_gambar" => $id.$urutan,
        "id_sepatu" => $id,
        "kode_warna" => $kode_warna[$no],
        "nama_warna" => $row,
        "gambar1" => $gambarkanan[$no],
        "gambar2" => $gambarkiri[$no],
        "gambar3" => $gambardepan[$no],
        "gambar4" => $gambarbelakang[$no]
      ];
      $no++;
      $urutan++;
    }
    $this->db->insert_batch('gambar', $dataBatch);
  }

  public function detailProduk($id_sepatu)
  {
    $this->db->join('gambar', 'gambar.id_sepatu = sepatu.id_sepatu');
    $this->db->join('kategori', 'kategori.kode_kategori = sepatu.kode_kategori');
    $this->db->where('sepatu.id_sepatu', $id_sepatu);
    return $this->db->get('sepatu')->row_array();
  }

  public function getWarna($id_sepatu)
  {
    $this->db->where('id_sepatu', $id_sepatu);
    return $this->db->get('gambar')->result();
  }

}