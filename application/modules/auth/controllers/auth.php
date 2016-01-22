<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('auth_model');
	}
	public function index()
	{
		print_r($this->auth_model->get_all());
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