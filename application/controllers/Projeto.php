<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Projeto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projeto_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->database();
    }

    public function cadastrarProjeto()
    {
        $this->form_validation->set_rules('nome_projeto', 'nome_projeto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('segmento_projeto', 'segmento_projeto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('inicio_projeto', 'inicio_projeto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('fim_projeto', 'fim_projeto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('custo_parcial', 'custo_parcial', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('tipo_linguagem', 'tipo_linguagem', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('tempo_gasto', 'tempo_gasto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));



        if ($this->input->post("nome_projeto") != '') {
            $dadosProjeto = array(
                'nome_projeto' => $this->input->post('nome_projeto', true),
                'segmento_projeto' => $this->input->post('segmento_projeto', true),
                'inicio_projeto' => $this->input->post('inicio_projeto', true),
                'fim_projeto' => $this->input->post('fim_projeto', true),
                'descricao' => $this->input->post('descricao', true),
                'custo_parcial' => $this->input->post('custo_parcial', true),
            );

            $id_projeto = $this->Projeto_model->cadastrar($dadosProjeto);

            $dadosFunc = $this->input->post('dadosFunc', true);
            foreach ($dadosFunc as $dado) {
                $dado = explode("-", $dado);
                $dadosFuncionalidade = array(
                    'id_projeto' => $id_projeto,
                    'nome_funcionalidade' => $dado[0],
                    'descricao' => $dado[1],
                );
                $id_funcionalidade = $this->Projeto_model->cadastrarFuncionalidade($dadosFuncionalidade);
                $dadosComplexidade = array(
                    'id_funcionalidade' => $id_funcionalidade,
                    'grau_complexidade' => $dado[2],
                    'tipo_funcao' =>$dado[3],
                    'quant_pontof' => $dado[4],
                    'peso' =>$dado[5],
                );
                $this->Projeto_model->inserirComplexidade($dadosComplexidade);
            }
            $dadosLinguagemProjeto = array(
                'id_projeto' => $id_projeto,
                'tipo_linguagem' => $this->input->post('tipo_linguagem', true),
                'tempo_gasto' => $this->input->post('tempo_gasto', true),
            );

            $this->Projeto_model->inserirLinguagemProjeto($dadosLinguagemProjeto);

            $mensagem = array('success' => 'Dados cadastrados');
            $this->load->view('Projeto/cadastrar_projeto', $mensagem);

            redirect('projeto/listarProjeto');
        } else {
            $this->load->view('Projeto/cadastrar_projeto');
        }
    }

    public function editar($idprojeto = '')
    {
        if ($_POST) {
            $dadosProjeto = array(
                'nome_projeto' => $this->input->post('nome_projeto', true),
                'segmento_projeto' => $this->input->post('segmento_projeto', true),
                'inicio_projeto' => $this->input->post('inicio_projeto', true),
                'fim_projeto' => $this->input->post('fim_projeto', true),
                'descricao' => $this->input->post('descricao', true),
                'custo_parcial' => $this->input->post('custo_parcial', true),
            );
            $this->Projeto_model->updateProjeto($dadosProjeto, $idprojeto);
            
            $dadosFunc = $this->input->post('dadosFunc', true);
            $this->Projeto_model->limparFuncionalidade($idprojeto, $dadosFunc);
            foreach ($dadosFunc as $dado) {
                $dado = explode("-", $dado);
                //var_dump($dado);die;
                $dadosFuncionalidade = array(
                    'id_projeto' => $idprojeto,
                    'nome_funcionalidade' => $dado[0],
                    'descricao' => $dado[1],
                );
                $id_funcionalidade = $this->Projeto_model->cadastrarFuncionalidade($dadosFuncionalidade);
                $dadosComplexidade = array(
                    'id_funcionalidade' => $id_funcionalidade,
                    'grau_complexidade' => $dado[2],
                    'tipo_funcao' =>$dado[3],
                    'quant_pontof' => $dado[4],
                    'peso' =>$dado[5],
                );
                $this->Projeto_model->inserirComplexidade($dadosComplexidade);
            }
            $dadosLinguagemProjeto = array(
                'tipo_linguagem' => $this->input->post('tipo_linguagem', true),
                'tempo_gasto' => $this->input->post('tempo_gasto', true),
            );
            $this->Projeto_model->updateLinguagensProjeto($dadosLinguagemProjeto, $idprojeto);
            Redirect('projeto/listarProjeto');
        } else {
            $dados['dadosProjeto'] = $this->Projeto_model->selecionarDadosProjeto($idprojeto);
            $dados['dadosFunc'] = $this->Projeto_model->selecionarDadosProjetoFuncionalidade($idprojeto);
            //var_dump($dados['dadosProjeto']);die;
            
            $this->load->view('Projeto/editar_projeto.php', $dados);
        }
    }

    public function projetoCheck()
    {
        $this->load->view('Projeto/editar_projeto');
    }

    public function expandir($id)
    {
        $projeto = $this->Projeto_model->expandir($id);
        $dados = array("Projeto" => $projeto);
        $this->load->view('Projeto/expandir.php', $dados);
    }

    public function limparFuncionalidade($idprojeto)
    {
        $this->Projeto_model->limparFuncionalidade($idprojeto);
    }

    public function listarProjeto()
    {
        $dados = array('projeto' => $this->Projeto_model->buscaCompleta());
        $this->load->view('Projeto/listar_projeto.php', $dados);
    }

    public function excluirProjeto($id)
    {
        $projeto = $this->Projeto_model->excluir($id);
        Redirect("projeto/listarProjeto");
    }
}
