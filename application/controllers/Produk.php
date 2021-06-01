<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller 
{
	private $per_page = 20;

	function start()
	{
		if ($this->uri->segment(3) == null)
		{
			return $start = 0;
		}
		else
		{
			return $start = (($this->uri->segment(3) - 1) * $this->per_page);
		}

	}
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model(['MProduk']);
    }

	public function index()
	{
		
	}

	public function kids()
	{
		$data['countProduk'] = $this->MProduk->count(0);
		$data['pagination'] = pagination('kids', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'kids';
		$data['katalog'] = $this->MProduk->getProduk(0, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function wanita()
	{	
		$data['countProduk'] = $this->MProduk->count(1);
		$data['pagination'] = pagination('wanita', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'wanita';
		$data['katalog'] = $this->MProduk->getProduk(1, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

    public function pria()
	{
		$data['countProduk'] = $this->MProduk->count(2);
		$data['pagination'] = pagination('pria', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'pria';
		$data['katalog'] = $this->MProduk->getProduk(2, $this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function allproduct()
	{
		$data['countProduk'] = $this->db->count_all('sepatu');
		$data['pagination'] = pagination('allproduct', $data['countProduk'], $this->per_page);

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'semua produk';
		$data['katalog'] = $this->MProduk->getSemuaProduk($this->per_page, $this->start());
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function detail($id_sepatu)
	{
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'detail';
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand" src='.$img.'>
								</a>
							</h1>
						</div>';
		$data['detail'] = $this->MProduk->detailProduk($id_sepatu);
		$data['warna'] = $this->MProduk->getWarna($id_sepatu);
		$this->layout('produk', 'detail', $data);
	}

	public function requestColor()
	{
		$kode = $_POST['warna'];

		$this->db->join('gambar', 'gambar.id_sepatu = sepatu.id_sepatu');
    	$this->db->join('kategori', 'kategori.kode_kategori = sepatu.kode_kategori');
		$this->db->where('gambar.id_gambar', $kode);
		$sql = $this->db->get('sepatu')->row();

		$gambar1 = base_url('assets/img/sepatu/'.$sql->nama_kategori.'/'.$sql->id_sepatu.' - '.$sql->nama_sepatu.'/'.$sql->gambar1);
		$gambar2 = base_url('assets/img/sepatu/'.$sql->nama_kategori.'/'.$sql->id_sepatu.' - '.$sql->nama_sepatu.'/'.$sql->gambar2);
		$gambar3 = base_url('assets/img/sepatu/'.$sql->nama_kategori.'/'.$sql->id_sepatu.' - '.$sql->nama_sepatu.'/'.$sql->gambar3);
		$gambar4 = base_url('assets/img/sepatu/'.$sql->nama_kategori.'/'.$sql->id_sepatu.' - '.$sql->nama_sepatu.'/'.$sql->gambar4);

		$data = '<div class="flexslider">';
		$data .= '<div class="clearfix"></div>';
		$data .= '<ul class="slides" style="width: 2000%; transition-duration: 0.6s; transform: translate3d(-3331.2px, 0px, 0px);">';
		if ($sql->gambar1 != null){
		$data .= "<li data-thumb='$gambar1' class='clone' aria-hidden='true' style='width: 416.4px; float: left; display: block;'>";
		$data .= "<div class='thumb-image'> <img src='$gambar1' data-imagezoom='true' class='img-responsive' draggable='false'></div>";
		$data .= '</li>';
		}
		if ($sql->gambar2 != null){
		$data .= "<li data-thumb='$gambar2' class='clone' aria-hidden='true' style='width: 416.4px; float: left; display: block;'>";
		$data .= "<div class='thumb-image'> <img src='$gambar2' data-imagezoom='true' class='img-responsive' draggable='false'></div>";
		$data .= '</li>';
		}
		if ($sql->gambar3 != null){
		$data .= "<li data-thumb='$gambar3' class='clone' aria-hidden='true' style='width: 416.4px; float: left; display: block;'>";
		$data .= "<div class='thumb-image'> <img src='$gambar3' data-imagezoom='true' class='img-responsive' draggable='false'></div>";
		$data .= '</li>';
		}
		if ($sql->gambar4 != null){
		$data .= "<li data-thumb='$gambar4' class='clone' aria-hidden='true' style='width: 416.4px; float: left; display: block;'>";
		$data .= "<div class='thumb-image'> <img src='$gambar4' data-imagezoom='true' class='img-responsive' draggable='false'></div>";
		$data .= '</li>';
		}
		$data .= '</ul>';
		$data .= '<ul class="flex-direction-nav">';
		$data .= '<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>';
		$data .= '<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>';
		$data .= '</ul>';
		$data .= '</div>';

		echo $data;
	}

	public function requestColorName() {
		$kode = $_POST['warna'];

		$this->db->join('sepatu', 'sepatu.id_sepatu = gambar.id_sepatu');
		$this->db->where('gambar.id_gambar', $kode);
		$sql = $this->db->get('gambar')->row();
		$nama_warna = strtoupper($sql->nama_warna);
		$nama_sepatu = $sql->nama_sepatu;

		$url = 'https://wa.me/6285655131099?text=Apakah+stok+dengan+nama+produk+%2A'.$nama_sepatu.'%2A+warna+%2A'.$nama_warna.'%2A+tersedia+%3F';
		echo $url;
	}
		
}
