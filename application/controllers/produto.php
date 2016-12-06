<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('produto_model');
    }

    public function index() {
        $data['page_title'] = 'Produtos';
        $config = config_pagination(base_url('produto/index'), $this->produto_model->countAll());
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['produtos'] = $this->produto_model->getAll($config['per_page'], $offset);
        $this->template->show('produto/index', $data);
    }

    public function view($id) {
        $data['produto'] = $this->produto_model->getById($id);
        $this->template->show('produto/view', $data);
    }

    public function busca() {
        $data['produtos'] = $this->produto_model->getLike($this->input->get('pesquisa'));
        $this->template->show('index', $data);
    }
    public function where($where) {
        $data['produtos'] = $this->produto_model->getWhere($where);
        $this->template->show('index', $data);
    }
}
