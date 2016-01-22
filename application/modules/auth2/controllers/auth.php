<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index()
	{
		print_r($this->load->model('auth/auth'));
		$query=$this->auth->get_all();
		// print_r($query);
	}
	public function logout()
	{
		echo 'login';
	}
	public function forgot_password()
	{
		echo 'login';
	}
	public function register()
	{
		echo 'login';
	}


}

/* End of file auth.php */
/* Location: ./application/modules/auth/controllers/auth.php */