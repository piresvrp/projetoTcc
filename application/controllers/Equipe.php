<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Equipe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Membro_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function cadastrarMembro()
    {
        $this->form_validation->set_rules('nome_membro', 'nome_membro', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('nivel_senioridade', 'nivel_senioridade', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
       
        if ($this->input->post("nome_membro") != '') {

            /*if ($this->form_validation->run() == FALSE) {
                $erros = validation_errors();
                 $this->load->helper(    'typography');
                $erros = auto_typography($erros);
                $mensagem = array('msg' => $erros);
                $this->load->view('Projeto/cadastrar_membroEquipe', $mensagem);
                ;
            } else {*/
            $dadosMembro = array(
                    'nome_membro' => $this->input->post('nome_membro', true),
                    'nivel_senioridade' => $this->input->post('nivel_senioridade', true),
                   
                 );
            $id_membro = $this->Membro_model->cadastrar($dadosMembro);

            $dadosCargo = array(
                    'id_membro' => $id_membro,
                    'cargo' => $this->input->post('cargo', true),
                    'valor_hora' => $this->input->post('valor_hora', true),
                    );
            $id_cargo = $this->Membro_model->cadastrarCargo($dadosCargo);
            $this->Membro_model->inserirCargo($dadosCargo);
               
            $mensagem = array('success' => 'Dados cadastrados');
            $this->load->view('Equipe/cadastrar_membroEquipe', $mensagem);

            redirect('Equipe/listarMembro');
        } else {
            $this->load->view('Equipe/cadastrar_membroEquipe.php');
        }
    }

    public function expandirMembro($id)
    {
        $this->load->database();
        $this->load->model("Membro_model");
        $membro = $this->Membro_model->expandirMembro($id);
        $dados = array("membro_equipe" => $membro);

        $this->load->view('Equipe/expandir_membro', $dados);
    }
    public function excluirMembro($id)
    {
        $this->load->model("Membro_model");
        $membro = $this->Membro_model->excluirMembro($id);
        Redirect("equipe/listarMembro");
    }
    public function membroCheck()
    {
        $this->load->view('Equipe/editar_membro');
    }

    
    public function visualizarCadastro()
    {
        $this->load->helper('form');
        $this->load->view('Equipe/cadastrar_membroEquipe');
    }

    public function listarMembro()
    {
        $this->load->model('Membro_model');
        $dadosMembro = array('membro_equipe' => $this->Membro_model->buscaCompleta());
        $this->load->view('Equipe/listar_membroEquipe', $dadosMembro);
    }

    public function editarMembro($idmembro_equipe ='')
    {
        if ($_POST) {
            $dadosMembro = array(

               'nome_membro' => $this->input->post('nome_membro', true),
                'nivel_senioridade' => $this->input->post('nivel_senioridade', true),
            );
            
            $dadosCargo = array(
                'nome_cargo' => $this->input->post('nome_cargo', true),
                'valor_hora'=>$this->input->post('valor_hora', true),
            );
             
            $idcarg = $this->Membro_model->selecionarCargo($idmembro_equipe);
             
               
            $this->Membro_model->updateMembro($dadosMembro, $idmembro_equipe);
            $this->Membro_model->updateCargo($dadosCargo, $idmembro);
            
            Redirect('Equipe/listarMembro');
        } else {
            $dados['dados'] = $this->Membro_model->selecionarDados($idmembro_equipe);
            $this->load->view('Equipe/editar_membro', $dados);
        }
    }
}
