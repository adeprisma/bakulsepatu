<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller 
{

	public function __construct()
    {
        parent::__construct();
		$this->load->model(['MProduk']);
    }

	public function index()
	{
		
	}

	public function wanita()
	{
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'wanita';
		$data['countProduk'] = $this->MProduk->count(1);
		$data['katalog'] = $this->MProduk->getProduk(1);
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
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'pria';
		$data['countProduk'] = $this->MProduk->count(2);
		$data['katalog'] = $this->MProduk->getProduk(2);
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

    public function kids()
	{
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'kids';
		$data['countProduk'] = $this->MProduk->count(0);
		$data['katalog'] = $this->MProduk->getProduk(0);
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

}
