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
}