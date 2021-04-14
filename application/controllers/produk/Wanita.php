<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wanita extends MY_Controller 
{

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->layout('produk', 'produk/wanita', null);
	}

}
