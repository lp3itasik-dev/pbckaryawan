<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class log extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
    }

	public function index()
	{
		$this->Login();
	}

	/** --Login-- **/
	public function login()
	{
		$this->load->view('log/login');
	}
	public function cek_login()
	{
		$username	= "username_login";
		$password	= "password_login";
		$username_value = $this->input->post('username');
		$password_value = $this->input->post('password');
		if($username_value=="adm025"&&$password_value=="adm025"){
			$data	= array(
				'nama'		=>	"Administrator",
				'log'			=>	'lgn-adm'
			);
			$this->session->set_userdata($data);
			redirect(base_url()."adm");
		}
		redirect(base_url()."log?msg=gagal");
	}
	/** --Login-- **/

	/** --Logout-- **/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."log?msg=logout");
	}
	/** --Logout-- **/

}
