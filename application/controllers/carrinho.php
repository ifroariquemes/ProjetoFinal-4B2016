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

    public function salvar() {
        $action = $this->input->post('salvar');
        if (!$action) {
            $this->template->show('carrinho/form_email');
        } else {
            $this->load->library('email');

            $this->email->from('brinfo@email.com', 'BrInfo');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Compra BrInfo');
            $this->email->message($this->getMessage());
            if ($this->email->send()) {
                $this->session->set_flashdata(
                        array('type' => 'alert-success',
                            'msg' => 'Salvo com sucesso'
                ));
                $this->cart->destroy();
                redirect('app');
            } else {
                $this->session->set_flashdata(
                        array('type' => 'alert-danger',
                            'msg' => 'Erro ao salvar'
                ));
                redirect('app');
            }
        }
    }

    private function getMessage() {
        $mensagem = "";
        foreach ($this->cart->contents() as $produto) {
            $mensagem .= "Produto: " . $produto['name'] . " Quantidade: " . $produto['qty'] . " Valor Unitário: " . $produto['price'] . "\n";
        }
        $mensagem .= "Valor total: " . $this->cart->total();

        return $mensagem;
    }

}
