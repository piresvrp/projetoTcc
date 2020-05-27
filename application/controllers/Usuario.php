<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Usuario extends CI_Controller
{
    public function cadastrar_Usuario()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('criptografia');


        $this->form_validation->set_rules('nome', 'nome', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('username', 'username', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('cpf', 'cpf', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('senha', 'senha', 'required', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|valid_emails', array('valid_email' => 'O campo %s nao e um email valido', 'required' => 'O campo %s nao pode ficar vazio'));

        $this->form_validation->set_rules('adm', 'adm', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('nivel', 'nivel', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('funcao', 'funcao', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

        if ($this->input->post("nome") != '') {
            if ($this->form_validation->run() == false) {
                $erros = validation_errors();
                $mensagem = array('msg' => $erros);
                $this->load->view('Usuario/cadastrar_usuario', $mensagem);
            } else {
                $criptografia = $this->criptografia->hashHX($this->input->post('senha'));

                $senha = $criptografia['password'];
                $salt = $criptografia['salt'];

                $dados = array(
                    'nome' => $this->input->post('nome', true),
                    'username' => $this->input->post('username', true),
                    'senha' => $senha,
                    'salt' => $salt,
                    'email' => $this->input->post('email', true),
                    'funcao' => $this->input->post('funcao', true),
                    'adm' => $this->input->post('adm', true),
                    'status' => 1,
                        /* if(isset($nivel) == 1){
                          $this->load->view('header.php');
                          }if(isset($nivel==0){
                          $this->load->view('cabecalho.php');

                          $this->load->view('footer.php');
                          } */
                );


                $this->load->model('usuario_model');
                $this->usuario_model->cadastrar($dados);
                $mensagem = array('success' => 'sucesso');
                $this->session->set_flashdata('cadastroFinzalizado', 'Usuario cadastro com sucesso!');

                redirect('Usuario/listar');
            }
        } else {
            $this->load->view('Usuario/cadastrar_usuario');
        }
    }

    public function visualizarCadastro()
    {
        $this->load->helper('form');
        $this->load->view('Usuario/cadastrar_usuario');
    }

    public function editar()
    {
        $this->load->helper('form');
        $this->load->view('Usuario/editar_perfil');
    }

    public function atualizar()
    {
        $this->load->helper('form');
        $id = $this->session->userdata('logado')[0]['idusuario'];

        $this->load->library('form_validation');
        $this->load->library('criptografia');


        //regras usuario
        $this->form_validation->set_rules('nome', 'nome', 'trim');
        $this->form_validation->set_rules('username', 'username', 'trim');
        $this->form_validation->set_rules('senha', 'senha');
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email|valid_emails', array('valid_email' => 'O campo %s nao e um email valido', 'required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('funcao', 'funcao', 'trim');
        $this->form_validation->set_rules('adm', 'adm', 'trim');
        $this->form_validation->set_rules('nivel', 'nivel', 'trim');




        if ($this->form_validation->run() == false) {
            $erros = validation_errors();
            $mensagem = array('msg' => $erros);
            $this->load->view('Usuario/editar_perfil', $mensagem);
        } else {
            if ($this->input->post('senha') != '') {
                $criptografia = $this->criptografia->hashHX($this->input->post('senha'));

                $senha = $criptografia['password'];
                $salt = $criptografia['salt'];

                $dados = array(
                    'nome' => $this->input->post('nome', true),
                    'cpf' => $this->input->post('cpf', true),
                    'username' => $this->input->post('username', true),
                    'senha' => $senha,
                    'salt' => $salt,
                    'email' => $this->input->post('email', true),
                    'funcao' => $this->input->post('funcao', true),
                    'adm' => $this->input->post('adm', true),
                    'nivel' => 1,
                    'status' => 1,
                );

                $this->load->model('Usuario_model');
                $result = $this->Usuario_model->atualizar($dados, $id, true);
            } else {
                $dados = array(
                    'nome' => $this->input->post('nome', true),
                    'cpf' => $this->input->post('cpf', true),
                    'username' => $this->input->post('username', true),
                    'email' => $this->input->post('email', true),
                    'funcao' => $this->input->post('funcao', true),
                    'adm' => $this->input->post('adm', true),
                    'nivel' => 1,
                    'status' => 1,
                );

                $this->load->model('Usuario_model');
                $result = $this->Usuario_model->atualizar($dados, $id, false);
            }
            if (!$result) {
                $mensagem = array('msg' => 'Nao foi possivel atualizar seus dados tente novamente.');
                $this->load->view('Usuario/editar_perfil', $mensagem);
            } else {
                $mensagem = array('success' => 'Dados atualizados, deslogue e logue novamente para carregar-lo');
                $this->load->view('Usuario/editar_perfil', $mensagem);
            }
        }
    }

    public function listar()
    {
        $this->load->Model('Usuario_model');
        $dados = array('usuarios' => $this->Usuario_model->buscaCompleta());
        $this->load->view('Usuario/listar_usuarios', $dados);
    }

    public function bloquearUsuario($id)
    {
        $this->load->Model('Usuario_model');
        $this->Usuario_model->bloquear($id);
        // $this->usuario();
    }

    public function desbloquearUsuario($id)
    {
        $this->load->Model('Usuario_model');
        $this->Usuario_model->desbloquear($id);
        //$this->usuario();
    }

    public function index()
    {
        /* esqueci a senha
          $this->load->library('criptografia');
          var_dump($this->criptografia->hashHX('jana123'));
          exit();
         */

        if (is_null($this->session->userdata('logado'))) {
            $this->load->helper('form');
            $this->load->view('login');
        } else {
            $this->load->view("inicio");
        }
    }

    public function logar()
    {
        $email = $this->input->post('email', true);
        $senha = $this->input->post('senha', true);

        $this->load->model('Usuario_model');
        $this->load->library('criptografia');

        $usuarios = $this->Usuario_model->consultar($email);

        if ($usuarios) {
            $bd_senha = $usuarios[0]['senha'];
            $bd_salt = $usuarios[0]['salt'];
            if ($usuarios[0]['status'] == 1) {
                $descriptografia = $this->criptografia->hashHX($senha, $bd_salt);
                if ($descriptografia['password'] === $bd_senha) {
                    $this->session->set_userdata("logado", $usuarios);
                    $this->load->view("inicio");
                } else {
                    $erro = array('msg' => 'Email ou senha invalido!');
                    $this->load->helper('form');
                    $this->load->view('login', $erro);
                }
            } else {
                $erro = array('msg' => 'Usuario bloqueado! <br>Contate o adiministrador.');
                $this->load->helper('form');
                $this->load->view('login', $erro);
            }
        } else {
            $erro = array('msg' => 'Email ou senha invalido!');
            $this->load->helper('form');
            $this->load->view('login', $erro);
        }
    }

    public function sair()
    {
        $this->session->sess_destroy();
        $this->load->helper('form');
        redirect('Usuario/index', 'Location');
    }
}
