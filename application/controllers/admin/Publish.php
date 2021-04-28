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
            $this->form_validation->set_rules('nama_sepatu', 'nama_sepatu', 'required|is_unique[sepatu.nama_sepatu]');
            $this->form_validation->set_rules('kategori', 'kode_kategori', 'required');
            $this->form_validation->set_rules('model', 'kode_model', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');
            $this->form_validation->set_rules('kategori_warna[]', 'kode_warna', 'required');
            $this->form_validation->set_rules('nama_warna[]', 'nama_warna', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->layout('admin/publish', $data);
            }
            else
            {
                $this->MProduk->addSepatu();
                redirect('admin/publish', 'refresh');
            }
        }
		$this->layout('admin/publish', $data);
	}


	public function signout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}