<?php

namespace Projeto\Unit\Controller;

class Helpers {
    private $nomeFuncao;
    private $usuario;

    public function processarDados($jsonData) {
        $data = json_decode($jsonData, true);

        if (isset($data['ID']) && isset($data['Name']) && isset($data['Key'])) {
            if ($data['ID'] <= 5) {
                $this->nomeFuncao = $data;
            } else {
                $this->usuario = $data;
            }
        }
    }
    
    public function getNomeFuncao() {
        return $this->nomeFuncao;
    }

    public function getUsuario() {
        return $this->usuario;
    }

// class Helpers {
//     public static function verificarLogin($nomeFuncao) {
//         // Simulando a verificação de login e retornando a mensagem
//         return "Usuário logado como: " . $nomeFuncao;
//     }
}
