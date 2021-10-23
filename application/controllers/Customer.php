<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library(['form_validation','session']);
        $this->load->database();

        if($this->session->userdata('email')) {
            redirect('profile');
        }
    }

    public function login() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('customer/login');
            $this->load->view('footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
 
            $account = $this->db->get_where('account',['email' => $email])->row();
 
            if(!$account) {
                $this->session->set_flashdata('login_error', 'Please check your email or password and try again.');
                redirect(uri_string());
            }

            if(!password_verify($password,$account->password)) {
                $this->session->set_flashdata('login_error', 'Please check your email or password and try again.');
                redirect(uri_string());
            }

            $account = $this->db->get_where('customer',['id_account' => $account->id_account])->row();

            $data = array(
                // 'customer_id' => $user->user_id,
                // 'first_name' => $user->first_name,
                // 'last_name' => $user->last_name,
                'email' => $account->email,
                'rol' => "customer",
            );

            $this->session->set_userdata($data);

            redirect('userc/profile');
        }
    }

    public function register() {
        $this->load->view('header');
        $this->load->view('customer/register');
        $this->load->view('footer');
    }

}