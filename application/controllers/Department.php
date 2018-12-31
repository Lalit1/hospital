<?php defined('BASEPATH') or exit('No direct script assess allowed');


class Department extends CI_Controller
{

	public function index() {
		$this->load->model('Home_model');
		$data = $this->Home_model->get_department();
		$depttData = array(
			'data' => $data
		);
		$this->load->template('departments', $depttData);
	}

}