<?php defined('BASEPATH') or exit('No direct script assess allowed');

class Contact extends CI_Controller
{

    public function index()
    {

        $this->load->template('contact');
    }
    public function query()
    {
    	$this->load->template('query');
    }
    public function feedback() {
    	$this->load->template('feedback');
    }
    public function career() {
    	$this->load->template('career');
    }

}

// echo "hello";