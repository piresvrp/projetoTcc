<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Despesas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Despesas_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->database();
    }

    public function cadastrarDespesas()
    {
        $this->form_validation->set_rules('aluguel', 'aluguel', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('condominio', 'condominio', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('agua', 'agua', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('luz', 'luz', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('internet', 'internet', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('sal_funcionario', 'sal_funcionario', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('outros', 'outros', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('total_gasto', 'total_gasto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));


        if ($this->input->post("aluguel") != '') {
            if ($this->form_validation->run() == false) {
//


                $erros = validation_errors();
                
                $this->load->helper('typography');
                $erros = auto_typography($erros);
                $mensagem = array('msg' => $erros);
                $this->load->view('Despesas/cadastrar_despesasfixas', $mensagem);
                ;
            } else {
                $dados = array(
                    'aluguel' => $this->input->post('aluguel', true),
                    'condominio' => $this->input->post('condominio', true),
                    'agua' => $this->input->post('agua', true),
                    'luz' => $this->input->post('luz', true),
                    'internet' => $this->input->post('internet', true),
                    'sal_funcionario' => $this->input->post('sal_funcionario', true),
                    'outros' => $this->input->post('outros', true),
                    'total_gasto' => $this->input->post('total_gasto', true),
                    
                );

                $this->load->model('Despesas_model');
                $this->Despesas_model->cadastrar($dados);
                $mensagem = array('success' => 'Dados cadastrados');
                $this->load->view('Despesas/cadastrar_despesasfixas', $mensagem);
            }
        }

        $this->load->view('Despesas/cadastrar_despesasfixas');
    }

    public function editar_form($id)
    {
        $this->load->model("Despesas_model");
        $dados= $this->Despesas_model->selecionarDados($id);
        $dados =  array("dados" => $dados);
        $this->load->view("Despesas/editar_despesas", $dados);
    }

    public function editar($id)
    {
        $dados = array(
                'aluguel' => $this->input->post('aluguel', true),
                'condominio' => $this->input->post('condominio', true),
                'agua' => $this->input->post('agua', true),
                'luz' => $this->input->post('luz', true),
                'internet' => $this->input->post('internet', true),
                'sal_funcionario' => $this->input->post('sal_funcionario', true),
                'outros' => $this->input->post('outros', true),
                'total_gasto' => $this->input->post('total_gasto', true),
            );

        $this->load->model('Despesas_model');
        $this->Despesas_model->editar($dados, $id);
        $this->load->view('Despesas/editar_despesas');
    }
    public function despesasCheck()
    {
        $this->load->view('Despesas/editar_despesas');
    }

    public function listarDespesas()
    {
        $this->load->model('Despesas_model');
        $dados = array('despesas_fixas' => $this->Despesas_model->buscaCompleta());
        $this->load->view('Despesas/listar_depesasfixas', $dados);
    }

    public function expandirDespesas($id)
    {
        $this->load->database();
        $this->load->model("Despesas_model");
        $dados = $this->Despesas_model->expandirDespesas($id);
        $dados = array("despesas_fixas" => $dados);

        $this->load->view('Despesas/expandirDespesas.php', $dados);
    }
    public function excluirDespesas($id)
    {
        $this->load->model("Despesas_model");
        $despesas_fixas = $this->Despesas_model->excluirDespesas($id);
        Redirect("Despesas/listarDepesas");
    }

   
    public function cadastrarInvestimento()
    {
        $this->load->model('Investimento_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('valorhard', 'valorhard', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('valorsoft', 'valorsoft', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('cap_giro', 'cap_giro', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('valor_totalinvest', 'valor_totalinvest', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('custo_totalprojeto', 'custo_totalprojeto', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

        $this->form_validation->set_rules('probabilidade', 'probabilidade', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
       

        if ($this->input->post("valorhard") != '') {
            if ($this->form_validation->run() == false) {
                $erros = validation_errors();
                
                $this->load->helper('typography');
                $erros = auto_typography($erros);
                $mensagem = array('msg' => $erros);
                $this->load->view('Despesas/cadastrar_capInvestimento', $mensagem);
                ;
            } else {
                $dados = array(
                    'valorhard' => $this->input->post('valorhard', true),
                    'valorsoft' => $this->input->post('valorsoft', true),
                    'cap_giro' => $this->input->post('cap_giro', true),
                    'valor_totalinvest'=> $this->input->post('valor_totalinvest', true),
                    'custo_totalprojeto'=> $this->input->post('custo_totalprojeto', true),
                    'probabilidade'=> $this->input->post('probabilidade', true),

                    
                );

                $this->load->model('Investimento_model');
                $this->Investimento_model->cadastrar($dados);
                $mensagem = array('success' => 'Dados cadastrados');
                $this->load->view('Despesas/cadastrar_capInvestimento', $mensagem);
            }
        }

        $this->load->view('Despesas/cadastrar_capInvestimento');
    }
    public function listarCapinvestimento()
    {
        $this->load->model('Investimento_model');
        $dados = array('cap_investimento' => $this->Investimento_model->buscaCompleta());
        $this->load->view('Despesas/listar_capInvestimento', $dados);
    }
    
    public function excluirCapinvestimento($id)
    {
        $this->load->model("Investimento_model");
        $cap_investimento = $this->Investimento_model->excluirCap($id);
        Redirect("Despesas/listarCapinvestimento");
    }
    public function investimentoCheck()
    {
        $this->load->view('Despesas/editar_investimento');
    }

    public function editarInvestimento($idcap_investimento = '')
    {
        if ($_POST) {
            $dados = array(
                'valorhard' => $this->input->post('valorhard', true),
                'valorsoft' => $this->input->post('valorsoft', true),
                'cap_giro' => $this->input->post('cap_giro', true),
                'valor_totalinvest' => $this->input->post('valor_totalinvest', true),
                'custo_totalprojeto' => $this->input->post('custo_totalprojeto', true),
                'probabilidade' => $this->input->post('probabilidade', true),
            );

            Redirect('Despesas/listarInvestimento');
        } else {
            //echo $idcap_investimento;
            //exit();

            $dados['dados']= "Registro não encontrado.";
            $this->load->view('Despesas/editar_investimento', $dados);
        }
    }
}
