<?php


class Despesas_model extends CI_Model
{
    public function cadastrar($dados)
    {
        $this->db->insert('despesas_fixas', $dados);
    }

    public function buscaCompleta()
    {
        return $this->db->get('despesas_fixas')->result_array();
    }

    public function buscaEspecifica($id)
    {
        $this->db->where('iddespesas_fixas', $id);
        return $this->db->get('despesas_fixas')->result_array();
    }
    public function expandirDespesas($id)
    {
        $this->db->select("despesas_fixas.*");
        $this->db->from("despesas_fixas");
        $this->db->where('despesas_fixas.iddespesas_fixas', $id);
        return $this->db->get()->result_array();
    }
    public function excluirDespesas($id)
    {
        $this->db->where('iddespesas_fixas', $id);
        return $this->db->delete('despesas_fixas');
    }

    public function editar($dados, $id)
    {
        $this->db->where("iddespesas_fixas", $id);
        $this->db->update("despesas_fixas", $dados, $id);
        $msg = array("mensagem" => "Editado com sucesso", "status" => 1);
        $this->session->set_flashdata("msg", $msg);
    }

    public function updateDespesas_fixas($dados, $id)
    {
        $this->db->where('despesas_fixas.iddespesas_fixas', $id);
        $this->db->set($dados)->update('despesas_fixas');
    }
    public function selecionarDados($id)
    {
        $this->db->select('despesas_fixas.*');
        $this->db->where('despesas_fixas.iddespesas_fixas', $id);
        return $this->db->get('despesas_fixas')->row();
    }
}
