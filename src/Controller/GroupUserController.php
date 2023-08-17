<?php

namespace Projeto\Unit\Controller;

class GroupUserController {
    public function atribuirFuncao($nomeFuncao) {
        $funcoes = [
            1 => 'Admin',
            2 => 'Delete',
            3 => 'Post',
            4 => 'Read',
            5 => 'Put',
            6 => 'Get'
        ];

        if (isset($nomeFuncao['ID']) && isset($nomeFuncao['Name']) && isset($nomeFuncao['Key'])) {
            $id = $nomeFuncao['ID'];
            if (array_key_exists($id, $funcoes)) {
                return $funcoes[$id];
            }
        }

        return null;
    }
}

// class GroupUserController {
//     public function processarLogin($nomeFuncao) {
//         // Simulando o processamento do login e chamando a função de verificação
//         $mensagem = Helpers::verificarLogin($nomeFuncao);
//         return $mensagem;
//     }
// }
?>