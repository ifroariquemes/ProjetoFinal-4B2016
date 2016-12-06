<?php

class Produto_model extends CI_Model {

    private $table = 'produto';

    public function __construct() {
        parent::__construct();
    }

    public function getAll($order = 'ASC', $limit = NULL, $offset = NULL) {
        if ($limit and $offset) {
            $this->db->limit($limit, $offset);
        } else {
            $this->db->limit($limit);
        }
        $this->db->order_by('produto_id', $order);

        $produtos = $this->db->get($this->table);
        if ($produtos->num_rows() > 0) {
            return $produtos->result();
        }
        return array();
    }

    public function getLike($like) {
        $this->db->like('nm_produto', $like);
        $produtos = $this->db->get($this->table);
        if ($produtos->num_rows() > 0) {
            return $produtos->result();
        }
        return array();
    }
    public function getWhere($where) {
        $this->db->where('categoria_id', $where);
        $produtos = $this->db->get($this->table);
        if ($produtos->num_rows() > 0) {
            return $produtos->result();
        }
        return array();
    }

    public function countAll() {
        return $this->db->count_all($this->table);
    }

    public function getById($id) {
        $this->db->where('produto_id', $id);
        $user = $this->db->get($this->table);
        if ($user->num_rows() > 0) {
            return $user->row_array();
        }
        return array();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($data) {
        $this->db->where('produto_id', $data['produto_id']);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('produto_id', $id);
        return $this->db->delete($this->table, $id);
    }

}
