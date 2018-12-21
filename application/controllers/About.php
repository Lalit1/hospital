<?php defined('BASEPATH') or exit('No direct script assess allowed');


class About extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index() {
		$data = $this->Home_model->get_about_content();

		$aboutData = array(
			'content' => $data['content'],
			'ft_img' => $data['ft_img'],
			'updated_at' => $data['updated_at'],
		);
		$this->load->template('about-us', $aboutData);
	}

}