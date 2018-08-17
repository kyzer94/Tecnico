<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('contatos');
        $query = $this->db->get();
        return $query->result();
    }

    function excluir($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contatos');
    }

    function inserir($c) {
        return $this->db->insert('contatos', $c);
    }

    function editar($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('contatos');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        return $this->db->update('contatos');
    }

}
