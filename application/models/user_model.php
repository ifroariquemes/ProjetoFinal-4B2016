<?php

/**
 * Description of user
 *
 * @author Lucaas
 */
class User_model extends CI_Model {

    private $salt = 'BrInFo';

    function __construct() {
        parent::__construct();
    }

    public function getAll($limit = NULL, $offset = NULL) {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $users = $this->db->get('usuario');
        if ($users->num_rows() > 0) {
            return $users->result();
        }
        return array();
    }

    public function countAll() {
        return $this->db->count_all('usuario');
    }

    public function getByEmailAndPass($login, $senha) {
        $this->db->where('email', $login)->where('senha', sha1($senha . $this->salt));
        $user = $this->db->get('usuario');
        if ($user->num_rows() > 0) {
            return $user->row_array();
        }
        return array();
    }

    public function getById($id) {
        $this->db->where('usuario_id', $id);
        $user = $this->db->get('usuario');
        if ($user->num_rows() > 0) {
            return $user->row_array();
        }
        return array();
    }

    public function insert($data) {
        $data['senha'] = sha1($data['senha'] . $this->salt);
        return $this->db->insert('usuario', $data);
    }

    public function update($data) {
        $data['senha'] = sha1($data['senha'] . $this->salt);
        $this->db->where('usuario_id', $data['usuario_id']);
        return $this->db->update('usuario', $data);
    }

}
