<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller 
{
	private $per_page = 8;
	
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
		
		if ($this->uri->segment(3) == null)
		{
			$start = 0;
		}
		else
		{
			$start = $this->uri->segment(3);
		}

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'kids';
		$data['katalog'] = $this->MProduk->getProduk(0, $this->per_page, $start);
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
		
		if ($this->uri->segment(3) == null)
		{
			$start = 0;
		}
		else
		{
			$start = $this->uri->segment(3);
		}

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'wanita';
		$data['katalog'] = $this->MProduk->getProduk(1, $this->per_page, $start);
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

		if ($this->uri->segment(3) == null)
		{
			$start = 0;
		}
		else
		{
			$start = $this->uri->segment(3);
		}

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'pria';
		$data['katalog'] = $this->MProduk->getProduk(2, $this->per_page, $start);
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

		if ($this->uri->segment(3) == null)
		{
			$start = 0;
		}
		else
		{
			$start = $this->uri->segment(3);
		}

		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'semua produk';
		$data['katalog'] = $this->MProduk->getSemuaProduk($this->per_page, $start);
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}
		
}
