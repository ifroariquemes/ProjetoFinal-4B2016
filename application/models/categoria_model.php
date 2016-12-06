<?php

class categoria_model extends CI_Model {

    private $table = "categoria";
    public $GET_CATEGORIA = 1;
    public $GET_SUB = 2;

    public function __construct() {
        parent::__construct();
    }

    public function getAll($option = 1, $limit = NULL, $offset = NULL) {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($option == $this->GET_CATEGORIA) {
            $this->db->where('pai_id', 0);
        }else if ($option == $this->GET_SUB) {
             $this->db->where('pai_id !=', 0);
        }

        $categoria = $this->db->get($this->table);
        if ($categoria->num_rows() > 0) {
            return $categoria->result();
        }
        return array();
    }

    public function countAll() {
        return $this->db->count_all();
    }

    public function getById($id) {
        $this->db->where('categoria_id', $id);
        $categoria = $this->db->get($this->table);
        if ($categoria->num_rows() > 0) {
            return $categoria->row_array();
        }
        return array();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($data) {
        $this->db->where('categoria_id', $data['categoria_id']);
        return $this->db->update($this->table, $data);
    }

}
