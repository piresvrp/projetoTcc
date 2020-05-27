<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Redireciona extends CI_Controller
{

    //put your code here

    public function pagina($param)
    {
        if (is_null($this->session->userdata('logado'))) {
            $this->load->helper('form');
            $this->load->view('login');
        } else {
            $this->load->view($param);
        }
    }
}
