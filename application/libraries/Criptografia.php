<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/**
 * Description of Criptografia
 *
 * @author deigon
 */
class Criptografia {

    public static function hashHX($password, $salt = null) {

        if (!$salt)
            $salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

        $password = hash('sha512', $password . $salt);

        return [
            'password' => $password,
            'salt' => $salt
        ];
    }

}
