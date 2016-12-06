<?php

class Categoria extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page_title'] = "Categorias";
        $this->load->model('categoria_model');
        $config = config_pagination(base_url('categoria/index'), $this->categoria_model->countAll());
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['categorias'] = $this->categoria_model->getAll($this->categoria_model->GET_CATEGORIA, $config['per_page'], $offset);
        $this->template->show('categoria/index', $data);
    }

    public function add() {
        $data['page_title'] = "Categorias-Cadastro";
        $this->load->model('categoria_model');
        $action = $this->input->post('add');
        if (!$action) {
            $data['categorias'] = $this->categoria_model->getAll($this->categoria_model->GET_CATEGORIA);
            $this->template->show('categoria/add', $data);
        } else {
            if ($this->categoria_model->insert(array('nm_categoria' => $this->input->post('nm_categoria')))) {
                $this->session->set_flashdata(
                        array('type' => 'alert-success',
                            'msg' => 'Categoria cadastrada com sucesso'
                ));
                redirect('categoria');
            } else {
                $this->session->set_flashdata(
                        array('type' => 'alert-danger',
                            'msg' => 'Usuário não cadastrado'
                ));
                redirect('categoria');
            }
        }
    }

    public function edit($id = 0) {
        $data['page_title'] = 'Categorias-Editar';
        $this->load->model('categoria_model');
        $action = $this->input->post('edit');
        if (!$action) {
            $data['categoria'] = $this->categoria_model->getById($id);
            $this->template->show('categoria/edit', $data);
        } else {
            $data = array('categoria_id' => $this->input->post('categoria_id'),
                'nm_categoria' => $this->input->post('nm_categoria'));

            if ($this->categoria_model->update($data)) {
                $this->session->set_flashdata(
                        array('type' => 'alert-success',
                            'msg' => 'Categoria editada com sucesso'
                ));
                redirect('categoria');
            } else {
                $this->session->set_flashdata(
                        array('type' => 'alert-danger',
                            'msg' => 'Categoria não editada'
                ));
                redirect('categoria');
            }
        }
    }

}
