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
									<img class="navbar-brand" src='.$img.'>
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
									<img class="navbar-brand" src='.$img.'>
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk', $data);
	}

	public function allProduct()
	{
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['kategori'] = 'semua produk';
		$data['countProduk'] = $this->MProduk->count(2);
		$data['katalog'] = $this->MProduk->getProduk(2);
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand" src='.$img.'>
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

	public function pagination()
	{
		$this->load->library('pagination');
	
		$config['base_url'] = 'url';
		$config['total_rows'] = 100;
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		
		$this->pagination->initialize($config);
		
		echo $this->pagination->create_links();
	}
	
	
	

}
