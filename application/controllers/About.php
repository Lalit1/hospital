<?php defined('BASEPATH') or exit('No direct script assess allowed');


class About extends CI_Controller
{

	public function index() {
		$this->load->template('about-us');
	}

}