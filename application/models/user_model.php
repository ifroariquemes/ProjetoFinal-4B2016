<?php

/**
 * Description of user
 *
 * @author Lucaas
 */
class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getByEmailAndPass($login, $senha) {
        $this->db->where('email', $login)->where('senha', $senha);
        $user = $this->db->get('usuario');
        if ($user->num_rows() > 0) {
            return $user->row_array();
        }
        return array();
    }
}
