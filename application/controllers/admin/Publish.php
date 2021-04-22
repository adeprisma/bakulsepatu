<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->layout('admin/publish', null);
	}

	public function signout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

}