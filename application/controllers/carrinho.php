<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('produto_model');
        $this->load->library('cart');
    }

    public function add($id) {
        $produto = $this->produto_model->getById($id);

        $data = array(
            'id' => $produto['produto_id'],
            'qty' => 1,
            'price' => $produto['vl_produto'],
            'name' => $produto['nm_produto']
        );

        if ($this->cart->insert($data)) {
            redirect('app');
        } else {
            echo 'Erro';
        }
    }

    public function view() {
        $this->template->show('carrinho/view');
    }

}
