<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('include/l_head');
        $this->load->view('include/l_alert');
        $this->load->view('login');
        $this->load->view('include/l_footer');
    }
}
