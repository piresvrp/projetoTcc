<?php

class Cargo_model extends CI_Model
{
    public function cadastrar($dados)
    {
        $this->db->insert('cargo', $dados);
    }

    public function buscaCompleta()
    {
        return $this->db->get('cargo')->result_array();
    }

    public function buscaEspecifica($id)
    {
        $this->db->where('idcargo', $id);
        return $this->db->get('cargo')->result_array();
    }
}
