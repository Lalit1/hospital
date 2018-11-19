<?php defined('BASEPATH') or exit('No direct script assess allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $this->load->template('home');
    }

}
