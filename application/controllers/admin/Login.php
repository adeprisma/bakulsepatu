<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller
{

	public function __construct()
    {
        parent::__construct();
		$this->load->model(['MAdmin']);
    }

	public function index()
	{
		if (isset($_POST['login']))
		{
			$username = $this->input->post('username');
			$pass = $this->input->post('password');
			$getAdmin = $this->MAdmin->getAdminBy($username);

			if (empty($getAdmin))
			{
				$this->session->set_flashdata('log_alert', 'Username Anda Belum Terdaftar!');
				redirect('admin');
			}
			else
			{
				if (!password_verify($pass, $getAdmin->password))
				{
					$this->session->set_flashdata('log_alert', 'Password salah Euy!');
					redirect('admin');
				}
				else
				{
					$session = [
						"is_login" => true,
						"id_admin" => $getAdmin->id_admin,
						"nama" => $getAdmin->nama,
						"email" => $getAdmin->email,
						"username" => $getAdmin->username,
						"gambar" => $getAdmin->gambar
					];

					$this->session->set_userdata($session);
					redirect('admin');
				}
			}
			$this->load->view('admin/login', FALSE);
		}

		if ($this->session->userdata('is_login') == true)
		{
			redirect('admin/home');
		}
		$this->load->view('admin/login', FALSE);
	}

	// $data = [
			// 	"password" => password_hash('admin', PASSWORD_BCRYPT)
			// ];

			// $this->db->where('username', 'widya');
			// $this->db->update('admin', $data);
			// die();

}
