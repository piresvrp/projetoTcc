 <?php


class Membro_model extends CI_Model
{
    public function cadastrar($dados)
    {
        $this->db->insert('membro_equipe', $dados);
    }

    public function buscaCompleta()
    {
        return $this->db->get('membro_equipe')->result_array();
    }

    public function buscaEspecifica($id)
    {
        $this->db->where('idmembro_equipe', $id);
        return $this->db->get('membro_equipe')->result_array();
    }


    public function cadastrarCargo($dadosCargo)
    {
        $this->db->insert('cargo', $dadosCargo);
        return $this->db->insert_id();
    }

    public function inserirCargo($dadosCargo)
    {
        $this->db->insert('cargo', $dadosCargo);
    }

    public function expandirMembro($id)
    {
        $this->db->select("membro_equipe.*");
        $this->db->from("membro_equipe");

        $this->db->where('membro_equipe.idmembro_equipe', $id);

        return $this->db->get()->result_array();
    }

    public function excluirMembro($id)
    {
        $this->db->where('idmembro_equipe', $id);
        return $this->db->delete('membro_equipe');
    }

    public function editarMembro($dados, $idmembro_equipe)
    {
        $this->db->where("idmembro_equipe", $id_Membro);
        $this->db->update("membro_equipe", $dadosMembro, $idmembro_equipe);
        $msg = array("mensagem" => "Editado com sucesso", "status" => 1);
        $this->session->set_flashdata("msg", $msg);
    }

    public function updateMembro($dados, $idmembro_equipe)
    {
        $this->db->where('membro_equipe.idmembro_equipe', $idmembro_equipe);
        $this->db->set($dadosMembro)->update('membro_equipe');
    }
    
    public function updateCargo($dadosCargo, $idmembro_equipe)
    {
        $this->db->where('cargo.idmembro_equipe', $id);
        $this->db->set($idCarg)->update('membro_equipe');
    }

    public function selecionarDados($idmembro_equipe)
    {
        $this->db->select('membro_equipe.*');
        $this->db->select('cargo.*');
        $this->db->from('cargo');
        $this->db->where('membro_equipe.idmembro_equipe', $idmembro_equipe);
        $this->db->where('membro_equipe.idmembro_equipe = cargo.idmembro_equipe');
        return $this->db->get('membro_equipe')->row();
//        echo $this->db->last_query();
    }
}
