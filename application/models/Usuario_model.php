<?php


class Usuario_model extends CI_Model {

    public function consultar($email) {
        $this->db->where(array("email" => $email));
        return $this->db->get('usuario')->result_array();
    }


    public function cadastrar($dados) {
        $this->db->insert('usuario', $dados);
    }


    public function buscaCompleta() {
        return $this->db->get('usuario')->result_array();
    }
    

    public function bloquear($id) {
        $this->db->where(array("idusuario" => $id));
        $this->db->set('status', 0);
        $this->db->update('usuario');
    }

    public function desbloquear($id) {
        $this->db->where(array("idusuario" => $id));
        $this->db->set('status', 1);
        $this->db->update('usuario');
    }

    public function atualizar($dados, $id, $senha) {
        $this->db->where(array("idusuario" => $id));
        $this->db->set('nome', $dados['nome']);
        $this->db->set('username', $dados['username']);
        $this->db->set('cpf', $dados['cpf']);
        if ($senha) {
            $this->db->set('senha', $dados['senha']);
            $this->db->set('salt', $dados['salt']);
        }
        $this->db->set('email', $dados['email']);
        $this->db->set('funcao', $dados['funcao']);
        $this->db->set('adm', $dados['adm']);
        $this->db->set('nivel', $dados['nivel']);
        $this->db->set('status', $dados['status']);
        $this->db->update('usuario');
        
        if ($this->db->trans_status() === true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }

}
