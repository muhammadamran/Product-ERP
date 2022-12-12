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

    public function index()
    {
        $app = $this->login_model->data_application();
        if ($app == 'FALSE') {
            // TITLE SIGN IN
            $x['page'] = 'Sign In - App Name';

            $x['ID'] = 'ID';
            $x['ICON'] = 'assets/default-images/icon/icon.png';
            $x['LOGO'] = 'assets/default-images/logo/logo.png';
            $x['LOAD'] = 'assets/default-images/loader/loader.png';
            $x['BACKGROUND'] = 'assets/default-images/background/erpbg.svg';
            $x['TITLE'] = 'TITLE APP';
            $x['APP_NAME'] = 'APP NAME';
            $x['COMPANY'] = 'COMPANY';
            $x['SLOGAN'] = 'SLOGAN';
            $x['EMAIL'] = 'email@domain.com';
            $x['TELP'] = '(02x) 000 000';
            $x['FAX'] = '-';
            $x['ADDRESS'] = 'Address';
            $x['TYPE_APP'] = 'Type Version';
            $x['VERSION'] = '1.0.0';
            $x['PROVINCE'] = '-';
            $x['CITY'] = '-';
            $x['DISTRICTS'] = '-';
            $x['RT'] = 'RT. 000';
            $x['RW'] = 'RW. 000';
            $x['OWNER'] = '-';
            $x['NIK'] = '-';
            $x['NPWP'] = '-';
            $x['TYPE_COMPANY'] = '-';
        } else {
            // TITLE SIGN IN
            $x['page'] = 'Sign In - ' . $x['APP_NAME'] = $app[0]->APP_NAME;

            $x['ID'] = $app[0]->ID;
            $x['ICON'] = $app[0]->ICON;
            $x['LOGO'] = $app[0]->LOGO;
            $x['LOAD'] = $app[0]->LOAD;
            $x['BACKGROUND'] = $app[0]->BACKGROUND;
            $x['TITLE'] = $app[0]->TITLE;
            $x['APP_NAME'] = $app[0]->APP_NAME;
            $x['COMPANY'] = $app[0]->COMPANY;
            $x['SLOGAN'] = $app[0]->SLOGAN;
            $x['EMAIL'] = $app[0]->EMAIL;
            $x['TELP'] = $app[0]->TELP;
            $x['FAX'] = $app[0]->FAX;
            $x['ADDRESS'] = $app[0]->ADDRESS;
            $x['TYPE_APP'] = $app[0]->TYPE_APP;
            $x['VERSION'] = $app[0]->VERSION;
            $x['PROVINCE'] = $app[0]->PROVINCE;
            $x['CITY'] = $app[0]->CITY;
            $x['DISTRICTS'] = $app[0]->DISTRICTS;
            $x['RT'] = $app[0]->RT;
            $x['RW'] = $app[0]->RW;
            $x['OWNER'] = $app[0]->OWNER;
            $x['NIK'] = $app[0]->NIK;
            $x['NPWP'] = $app[0]->NPWP;
            $x['TYPE_COMPANY'] = $app[0]->TYPE_COMPANY;
        }


        $this->load->view('include/l_head', $x);
        $this->load->view('include/l_alert');
        $this->load->view('login', $x);
        $this->load->view('include/l_footer', $x);
    }
}
