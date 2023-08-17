<?php

namespace Projeto\Unit\Classes;

class Funcoes {
    private $usuarios = [];
    
    public function __construct($admin, $get, $delete, $post, $put, $leitura) {
        $this->usuarios = [
            "admin" => $admin,
            "get" => $get,
            "delete" => $delete,
            "post" => $post,
            "put" => $put,
            "leitura" => $leitura,
        ];
    }

    public function realizarOperacao($dados, $funcao) {
        $usuario = $this->usuarios[$funcao];
        
        switch ($funcao) {
            case 'get':
                echo "Dados lidos: " . json_encode($dados) . " pelo usuário " . $usuario->username . "<br>";
                break;
            case 'delete':
                echo "Dados deletados pelo usuário " . $usuario->username . "<br>";
                break;
            case 'post':
                echo "Dados postados: " . json_encode($dados) . " pelo usuário " . $usuario->username . "<br>";
                break;
            case 'put':
                echo "Dados atualizados: " . json_encode($dados) . " pelo usuário " . $usuario->username . "<br>";
                break;
            case 'leitura':
                echo "Usuário " . $usuario->username . " realizou uma operação de leitura<br>";
                break;
            default:
                echo "Função desconhecida<br>";
                break;
        }
    }
}
?>