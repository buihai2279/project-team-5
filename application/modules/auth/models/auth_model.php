<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	function get_all() {
		
		$query = $this->db->get('city');
        return $query->result_array();
        // return "success";
	}

}

/* End of file auth.php */
/* Location: ./application/modules/auth/models/auth.php */