<?php


class Projeto_model extends CI_Model
{
    public function cadastrar($dados)
    {
        $this->db->insert('projeto', $dados);
        return $this->db->insert_id();
    }

    public function buscaCompleta()
    {
        return $this->db->get('projeto')->result_array();
    }

    public function buscaEspecifica($id)
    {
        $this->db->where('idprojeto', $id);
        return $this->db->get('projeto')->result_array();
    }

    public function excluir($id)
    {
        $this->db->where('idprojeto', $id);
        return $this->db->delete('projeto');
    }

    public function expandir($id)
    {
        $this->db->select("projeto.*");
        $this->db->from("projeto");

        $this->db->where('projeto.idprojeto', $id);

        return $this->db->get()->result_array();
    }

    public function excluirProjeto($id)
    {
        $this->db->where("idprojeto", $id);
        $this->db->delete("projeto");
        $msg = array("mensagem" => "Deletado com sucesso", "status" => 1);
        $this->session->set_flashdata("msg", $msg);
    }

    public function editarProjeto($dadosProjeto, $id)
    {
        $this->db->where("idprojeto", $id);
        $this->db->update("projeto", $dadosProjeto, $id);
        $msg = array("mensagem" => "Editado com sucesso", "status" => 1);
        $this->session->set_flashdata("msg", $msg);
    }

    public function cadastrarFuncionalidade($dados)
    {
        $this->db->insert('funcionalidade', $dados);
        return $this->db->insert_id();
    }

    public function inserirComplexidade($dados)
    {
        $this->db->insert('complexidade', $dados);
    }

    public function inserirLinguagemProjeto($dados)
    {
        $this->db->insert('linguagem_proj', $dados);
    }

    public function selecionarDadosProjeto($id_projeto)
    {
        $this->db->select('projeto.*');
        $this->db->select('linguagem_proj.*');
        $this->db->from('linguagem_proj');
        $this->db->where('projeto.idprojeto', $id_projeto);
        $this->db->where('linguagem_proj.id_projeto', $id_projeto);
        return $this->db->get('projeto')->row();
    }
    public function selecionarDadosProjetoFuncionalidade($id_projeto)
    {
        $this->db->select('funcionalidade.*');
        $this->db->select('complexidade.*');
        $this->db->from('complexidade');
        $this->db->where('funcionalidade.id_projeto', $id_projeto);
        $this->db->where('funcionalidade.idfuncionalidade = complexidade.id_funcionalidade');
        return $this->db->get('funcionalidade')->result();
//        echo $this->db->last_query();
    }
    public function limparFuncionalidade($id_projeto, $dadosFunc)
    {
        $this->db->delete('funcionalidade', array('id_projeto' => $id_projeto));
        foreach ($dadosFunc as $dados) {
            $this->db->delete('complexidade', array('id_funcionalidade' => $dados[0]));
        }
    }

    public function selecionarFunctionalidade($idProjeto)
    {
        $this->db->select('funcionalidade.idfuncionalidade');
        $this->db->where('funcionalidade.idfuncionalidade', $idProjeto);
        return $this->db->get('funcionalidade')->row();
    }
    
    public function updateProjeto($dadosProj, $idProjeto)
    {
        $this->db->where('projeto.idprojeto', $idProjeto);
        $this->db->set($dadosProj)->update('projeto');
    }
    public function updateFuncionalidade($dadosFunc, $idProjeto)
    {
        $this->db->where('funcionalidade.id_projeto', $idProjeto);
        $this->db->set($dadosFunc)->update('funcionalidade');
    }
    public function updateComplexidade($dadosComp, $idFunc)
    {
        $this->db->where('complexidade.id_funcionalidade', $idFunc);
        $this->db->set($dadosComp)->update('complexidade');
    }
    public function updateLinguagensProjeto($dadosLingua, $idProjeto)
    {
        $this->db->where('linguagem_proj.id_projeto`', $idProjeto);
        $this->db->set($dadosLingua)->update('linguagem_proj');
    }
}
