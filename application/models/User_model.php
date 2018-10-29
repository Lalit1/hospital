<?php 

/**
 * 
 */
class User_model extends CI_Model
{
	
	public function check_user($email, $password) {

		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$result = $this->db->get()->result_array();

		return $result;
	}

	public function get_user() {
		$this->db->from('users');
		$this->db->where('id', $this->session->userdata('userId'));
		$result = $this->db->get()->result_array();

		return $result[0];
	}

	public function update_info($fname, $lname) {
		$data = array(
			'fname' => $fname,
			'lname' => $lname
		);
		$this->db->where('id', $this->session->userdata('userId'));
		if ($this->db->update('users', $data)) 
			return TRUE;
		return FALSE;
	}

	public function credential_update($data) {
		$this->db->where('id', $this->session->userdata('userId'));
		if ($this->db->update('users', $data)) 
			return TRUE;
		return FALSE;
	}

	public function upload_banner() {
		if(isset($_POST['submit_image']))
		{
			for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
			{
				$uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
				$folder="images/";
				move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);
			}
			exit();
		}
	}
}