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
		$this->load->model('User_model');
		$result  = $this->User_model->get_user();
		$data = array(
			'fname' => $result['fname'],
			'lname' => $result['lname'],
			'email' => $result['email']
		);
		$this->load->admin_temp('admin/dashboard', $data);
		
	}


	public function info_update() {
		$form_data = $this->input->post();
		if ($form_data) {
			$fname = $form_data['fname'];
			$lname = $form_data['lname'];
			$this->load->model('User_model');
			$result = $this->User_model->update_info($fname, $lname);

			if (!$result) {
				$this->session->set_flashdata('error', "Something went wrong! Please try again later.");
				redirect('user/dashboard');
			}
			$this->session->set_flashdata('success', "Your info has been updated successfully.");
			redirect('user/dashboard');
		}
		$this->session->set_flashdata('error', "Please enter required data.");
		redirect('user/dashboard');
	}

	public function update_credentials() {
		$form_data = $this->input->post();
		if ($form_data) {
			if ($form_data['pass']) {
				$data['password'] = $form_data['pass'];
			}
			$data['email'] = $form_data['email'];
			$this->load->model('User_model');
			$result = $this->User_model->credential_update($data);

			if (!$result) {
				$this->session->set_flashdata('error', "Something went wrong! Please try again later.");
				redirect('user/dashboard');
			}
			$this->session->set_flashdata('success', "Your credentials has been updated successfully.");
			redirect('user/dashboard');
		}
	}

	public function edit_home() {
		$this->load->admin_temp('admin/home');
	}

	public function upload_banner() {
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['banner']['name']);
echo "<pre>";
print_r($_FILES);
die();
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['banner']['name']= $files['banner']['name'][$i];
			$_FILES['banner']['type']= $files['banner']['type'][$i];
			$_FILES['banner']['tmp_name']= $files['banner']['tmp_name'][$i];
			$_FILES['banner']['error']= $files['banner']['error'][$i];
			$_FILES['banner']['size']= $files['banner']['size'][$i];    

			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
			$dataInfo[] = $this->upload->data();
		}

		$data = array(
			'name' => $this->input->post('pd_name'),
			'prod_image' => $dataInfo[0]['file_name'],
			'prod_image1' => $dataInfo[1]['file_name'],
			'prod_image2' => $dataInfo[2]['file_name'],
			'created_time' => date('Y-m-d H:i:s')
		);
		$result_set = $this->tbl_products_model->insertUser($data);
	}
	public function logout() {
		session_destroy();

		redirect('home');
	}

}