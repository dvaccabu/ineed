<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserP extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library(['form_validation','session']);
        $this->load->database();

        // if(!$this->session->userdata('email')) {
        //     redirect('/');
        // }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function change_password() {
        
    }

    public function profile() {
        $this->load->view('header');
        //$this->load->view('menu');
        //$this->load->view('provider/profile');
        $this->load->view('footer');
    }

}
