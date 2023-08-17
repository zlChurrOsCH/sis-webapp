<?php

namespace Projeto\Unit;

class Autenticacao {
    public static function autenticar($username, $password) {
        // Lógica de autenticação...
        $usuarios = [
            'admin' => 'senhaAdmin',
            'getuser' => 'senhaGet',
            'deleteuser' => 'senhaDelete',
            'postuser' => 'senhaPost',
            'putuser' => 'senhaPut',
            'leiturauser' => 'senhaLeitura',
        ];

        if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
            return true;
        } else {
            return false;
        }
    }

    public static function gerarMensagem($username, $password) {
        if (self::autenticar($username, $password)) {
            return "Usuário autenticado como $username";
        } else {
            return "Falha na autenticação";
        }
    }
}

?>