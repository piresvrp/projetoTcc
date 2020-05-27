<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('validar')) {

    /**
     * URL String
     *
     * Returns the URI segments.
     *
     * @return	string
     */
    function validar($publico = TRUE) {

        if (!$publico) {
            $this->load->helper('form');
            $this->load->view('login');
        }
    }

}