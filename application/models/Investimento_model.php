<?php


class Investimento_model extends CI_Model
{
    public function cadastrar($dados)
    {
        $this->db->insert('cap_investimento', $dados);
    }

    public function buscaCompleta()
    {
        return $this->db->get('cap_investimento')->result_array();
    }

    public function buscaEspecifica($id)
    {
        $this->db->where('idcap_investimento', $id);
        return $this->db->get('cap_investimento')->result_array();
    }
    public function excluirCap($id)
    {
        $this->db->where('idcap_investimento', $id);
        return $this->db->delete('cap_investimento');
    }
    public function expandirCap($id)
    {
        $this->db->select("cap_investimento.*");
        $this->db->from("cap_investimento");

        $this->db->where('cap_investimento.idcap_investimento', $id);

        return $this->db->get()->result_array();
    }

    public function editarInvestimento($dados, $idcap_investimento)
    {
        $this->db->where("idcap_investimento", $idcap_investimento);
        $this->db->update("cap_investimento", $dados, $idcap_investimento);
        $msg = array("mensagem" => "Editado com sucesso", "status" => 1);
        $this->session->set_flashdata("msg", $msg);
    }
    public function selecionarDados($idcap_investimento)
    {
        $this->db->select('cap_investimento.*');
        $this->db->where('cap_investimento.idcap_investimento', $idcap_investimento);
        return $this->db->get('cap_investimento')->row();
    }

    public function updateCap_investimento($dados, $idcap_investimento)
    {
        $this->db->where('cap_investimento.idcap_investimento', $idcap_investimento);
        $this->db->set($dadosInvestimento)->update('cap_investimento');
    }
}
