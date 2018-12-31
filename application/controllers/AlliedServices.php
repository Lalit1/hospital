<?php defined('BASEPATH') or exit('No direct script assess allowed');


class AlliedServices extends CI_Controller
{

	public function index() {
		$this->load->model('Home_model');
		$data = $this->Home_model->get_allied_services();
		$alliedData = array(
			'alliedData' => $data
		);
		$this->load->template('allied', $alliedData);
	}

}