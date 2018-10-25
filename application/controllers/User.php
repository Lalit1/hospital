<?php defined('BASEPATH') or exit('No direct script assess allowed');


class User extends CI_Controller
{

	public function login() {

		// check if credential is right

		if($this->input->method()== 'post'){

			$form_data = $this->input->post();
			$email = $form_data['email'];
			$pass = $form_data['password'];
			if(!empty($email) && !empty($pass)){

				$this->load->model('User_model');
				$result = $this->User_model->check_user($email, $pass);

				if ($result) {
					$this->session->set_userdata('userId', $result[0]['id']);
					redirect('/user/dashboard');
				}
			}

		}
		$this->load->template('login');
	}



	public function dashboard() {
		if(empty($this->session->userdata('userId')))
			redirect('/user/login');

		$this->load->admin_temp('admin/dashboard');
		
	}

	public function logout() {
		session_destroy();

		redirect('home');
	}

}