<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function index() {
        $data['page_title'] = 'Produtos';
        $this->load->model('produto_model');
        $config = config_pagination(base_url('produto/index'), $this->produto_model->countAll());
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['produtos'] = $this->produto_model->getAll($config['per_page'], $offset);
        $this->template->show('produto/index', $data);
    }
    
    public function view($id) {
        $this->load->model('produto_model');
        $data['produto'] = $this->produto->getById($id);
        $this->template->show('produto/view', $data);
    }

}
