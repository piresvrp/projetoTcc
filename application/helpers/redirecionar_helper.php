<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('redirecionar')) {

    /**
     * URL String
     *
     * Returns the URI segments.
     *
     * @return	string
     */
    function redirecionar() {
        if ($this->session->get_userdata() != null) {
            #$this->load->view('inicio');
            $this->session->set_flashdata("mensagem", "Logado com sucesso");
            $this->load->view("inicio");
        } else {
            $this->load->helper('form');
            $this->load->view('login');
        }
    }

}