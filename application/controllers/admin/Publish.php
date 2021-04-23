<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['MProduk']);
    }

	public function index()
	{
        $data['kategori'] = $this->MProduk->getKategori();
        $data['model'] = $this->MProduk->getmodel();
        $data['kategori_warna'] = $this->MProduk->getkategori_warna();
		$this->layout('admin/publish', $data);
	}

	public function signout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}