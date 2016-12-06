<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function index() {
        $this->load->model('produto_model');
        $data['produtos'] = $this->produto_model->getAll('RANDOM', 20);
        $this->template->show('index', $data);
    }

}
