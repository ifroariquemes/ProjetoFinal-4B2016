<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }


    public function view() {
        var_dump($this->session->all_userdata());
        exit;
    }

    public function index() {
        $this->template->show('login');
    }
    
    public function login() {
        $this->template->show('login');
    }

    public function validate() {
        $this->load->model('user_model');
        $result = $this->user_model->getByEmailAndPass($this->input->post('email'), $this->input->post('senha'));
        if ($result) {
            $this->session->set_userdata(array(
                'logged' => TRUE,
                'usuario_id' => $result['usuario_id'],
                'nm_usuario' => $result['nm_usuario']
            ));

            redirect('app');
        } else {
            $this->session->set_flashdata('msg','Nome de usuário ou senha inválida');
            redirect('user/login');
        }
    }

    public function logout() {
        //$this->session->unset_userdata('logged');
        $this->session->sess_destroy();
        redirect('app');
    }

}
