<?php defined('BASEPATH') or exit('No direct script assess allowed');


class User extends CI_Controller
{

	function  __construct() {
		parent::__construct();
        // Load session library
		$this->load->library('session');
		$this->load->model('Home_model');
	}


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

	/*user dashboard redirect controller*/
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

	/*function to update user info*/
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

	/*function to update user credentials*/
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

	/*edit home redirect controller*/
	public function edit_home($data = NULL) {
		$this->load->admin_temp('admin/home', $data);
	}

	/*function to upload home banner*/
	public function upload_banner() {
		if (!empty($_FILES['files']['name'][0])) {

			$path = 'uploads/images/home_banner';
			$data = $this->upload_files($path, $_FILES);
			// echo "<pre>";
			// print_r($_FILES);
			// die();
			if (!$data)
				$this->session->set_flashdata('error','Something went wrong please try again later.');
			else
				$this->session->set_flashdata('success', 'Home page bannens has been updated successfully.');			
		}
		$this->edit_home($data);
	}

	/*generic function for image upload*/
	public function upload_files($path, $files) {
		$_FILES = $files;
		$path = base_url().$path;
		$data = array();
        // If file upload form submitted
		$filesCount = count($_FILES['files']['name']);
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['file']['name']     = $_FILES['files']['name'][$i];
			$_FILES['file']['type']     = $_FILES['files']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['files']['error'][$i];
			$_FILES['file']['size']     = $_FILES['files']['size'][$i];

                // File upload configuration
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

                // Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

                // Upload file to server
			if($this->upload->do_upload('file')){
                    // Uploaded file data
				$fileData = $this->upload->data();
				echo "<pre>"; print_r($fileData); die();
				$uploadData[$i]['file_name'] = $fileData['file_name'];
				$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
			}
		}

		if(!empty($uploadData)){
                // Insert files data into the database
			$insert = $this->Home_model->insert($uploadData);

                // Upload status message
			$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
			$this->session->set_flashdata('statusMsg',$statusMsg);
		}

        // Get files data from the database
		$data['files'] = $this->Home_model->getRows();

		return $data;
        // Pass the files data to view
		$this->load->view('upload_files/index', $data);
	}


	public function do_upload($path, $inputName) {
		
		/*preparing upload config*/
		$path = FCPATH.$path;
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 100;

		/*load file upload library*/
		$this->load->library('upload', $config);

		if ($this->upload->do_upload($inputName)) return TRUE;
		return FALSE;
	}

	/*function to load admin about us page*/
	public function edit_about_us() {
		if (!empty($this->input->post())) {
			switch ($this->input->post('key')) {
				/*content add/edit*/
				case 1:
				$content = $this->input->post('about_content');
				$result = $this->Home_model->add_about_content($content, 1);
				break;

				/*upload ft_img*/
				case 2:
				$path = 'uploads/images/about-ft-img';
				$inputName = 'ft_img';
				$result = $this->do_upload($path, $inputName);
				if(!$result) $this->session->set_flashdata('error', 'Something went wrong! Please try again later.');
				else {
					$this->Home_model->add_about_content($_FILES['ft_img']['name'], 2);
					$this->session->set_flashdata('succes', 'Featured image has been uploaded successfully.');
				}
				break;
			}
			
		}
		$data = $this->Home_model->get_about_content();
		$aboutData = array(
			'content' => $data['content'],
			'ft_img' => $data['ft_img'],
			'updated_at' => $data['updated_at'],
		);
		$this->load->admin_temp('admin/about_us', $aboutData);
	}


	/*function to logout user*/
	public function logout() {
		session_destroy();

		redirect('home');
	}

}