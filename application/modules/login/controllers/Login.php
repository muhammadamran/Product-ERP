<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // LOAD MODELS
        $this->load->model('login_model');
    }
}
