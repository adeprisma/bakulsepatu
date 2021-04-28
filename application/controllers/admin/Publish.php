<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['MProduk']);
        $this->load->helper(['form', 'url']);
    }

	public function index()
	{
        $data['kategori'] = $this->MProduk->getKategori();
        $data['model'] = $this->MProduk->getModel();
        $data['kategori_warna'] = $this->MProduk->getkategori_warna();

        if (isset($_POST['submit']))
        {
            $this->MProduk->addSepatu();
            redirect('admin/publish', 'refresh');
           
        }
		$this->layout('admin/publish', $data);
	}


	public function signout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}