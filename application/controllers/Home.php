<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller 
{

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$url = base_url();
		$img = base_url('assets/img/logo-bakulsepatu.png');
		$data['logo'] = '<div class="logo">
							<h1>
								<a href='.$url.'>
									<img class="navbar-brand-beranda" src='.$img.'>
								</a>
							</h1>
						</div>';

		$this->layout('home', 'home', $data);
	}

}
