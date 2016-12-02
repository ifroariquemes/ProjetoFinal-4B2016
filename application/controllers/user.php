<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
            echo 'Não logado';
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged');
        redirect('app');
    }

}
