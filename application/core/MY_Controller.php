<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function layout($banner, $content, $data)
    {
        $data['html'] = '<div class="banner_top innerpage" id="home"><div class="wrapper_top_w3layouts">';
        $data['close_tag'] = '</div>';
        
        $this->load->view('layout/header', $data, FALSE);
        $this->load->view("layout/banner/$banner", $data, FALSE);
        $this->load->view($content, $data, FALSE);
        $this->load->view('layout/footer');
    }

}
