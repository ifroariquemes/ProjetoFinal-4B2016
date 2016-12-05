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
        if(!$this->session->userdata('logged')) redirect ('app');
        $data['page_title'] = 'Usuários';
        $this->load->model('user_model');

        $config = config_pagination(base_url('user/index'), $this->user_model->countAll());
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['users'] = $this->user_model->getAll($config['per_page'], $offset);
        $this->template->show('user/index', $data);
    }

    public function edit() {
        if(!$this->session->userdata('logged')) redirect ('app');
        $data['page_title'] = 'Editar';
        $this->load->model('user_model');
        $action = $this->input->post('editar');
        if (!$action) {
            $data['user'] = $this->user_model->getById($this->session->userdata('usuario_id'));
            $this->template->show('user/edit', $data);
        } else {
            $data = $this->get_post_to_array();
            $data['usuario_id'] = $this->input->post('usuario_id');
            if ($this->user_model->update($data)) {
                $this->session->set_flashdata(
                        array('type' => 'alert-success',
                            'msg' => 'Usuário editado com sucesso'
                ));
                redirect('app');
            } else {
                $this->session->set_flashdata(
                        array('type' => 'alert-danger',
                            'msg' => 'Usuário não editado'
                ));
                redirect('user');
            }
        }
    }

    public function login() {
        $data['page_title'] = 'Login';
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
            $this->session->set_flashdata(
                    array('type' => 'alert-danger',
                        'msg' => 'Dados inválidos'
            ));
            redirect('user/login');
        }
    }

    public function logout() {
        //$this->session->unset_userdata('logged');
        $this->session->sess_destroy();
        redirect('app');
    }

    public function cadastrar() {
        if(!$this->session->userdata('logged')) redirect ('app');
        $data['page_title'] = 'Cadastro';
        $action = $this->input->post('cadastrar');
        if (!$action) {
            $this->template->show('user/add');
        } else {
            $dados = $this->get_post_to_array();
            $this->load->model('user_model');
            if ($this->user_model->insert($dados)) {
                $this->session->set_flashdata(
                        array('type' => 'alert-success',
                            'msg' => 'Usuário cadastrado com sucesso'
                ));
                redirect('user');
            } else {
                $this->session->set_flashdata(
                        array('type' => 'alert-danger',
                            'msg' => 'Usuário não cadastrado'
                ));
                redirect('user');
            }
        }
    }

    private function get_post_to_array() {
        return array(
            'nm_usuario' => $this->input->post('nm_usuario'),
            'sobrenome' => $this->input->post('sobrenome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'senha' => $this->input->post('senha')
        );
    }
}
