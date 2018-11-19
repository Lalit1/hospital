<?php defined('BASEPATH') or exit('No direct script assess allowed');


class Doctors extends CI_Controller
{

	public function index() {
		$this->load->template('doctors');
	}

}