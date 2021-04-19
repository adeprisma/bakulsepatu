<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wanita extends MY_Controller 
{

	public function __construct()
    {
        parent::__construct();
		$this->load->model(['MWanita']);
    }

	public function index()
	{
		$url = base_url();
		$data['produk'] = $this->MWanita->count();
		$data['wanita'] = $this->MWanita->getWanita();
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-produk" src="https://trekkersshoes.com/assets/img/logo.png">
								</a>
							</h1>
						</div>';
		$this->layout('produk', 'produk/wanita', $data);
	}

}
