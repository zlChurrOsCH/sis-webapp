<?php

use PHPUnit\Framework\TestCase;
use Projeto\Unit\Controller\Helpers;

class HelpersTest extends TestCase {
    public function testProcessarDados() {
        $jsonData = '{"ID": 4, "Name": "John", "Key": "abc123"}';
        $helpers = new Helpers();
        $helpers->processarDados($jsonData);

        $nomeFuncao = $helpers->getNomeFuncao();
        $usuario = $helpers->getUsuario();

        $this->assertEquals(4, $nomeFuncao['ID']);
        $this->assertEquals("John", $nomeFuncao['Name']);
        $this->assertEquals("abc123", $nomeFuncao['Key']);
        $this->assertNull($usuario);
    }
}




// use Projeto\Unit96\Controller\Helpers;

// class HelpersTest extends TestCase {
//     public function testVerificarLoginAdmin() {
//         $nomeFuncao = "Admin";
//         $mensagem = Helpers::verificarLogin($nomeFuncao);
//         $this->assertEquals("Usuário logado como: " . $nomeFuncao, $mensagem);
//     }

//     public function testVerificarLoginUsuario() {
//         $nomeFuncao = "Usuário";
//         $mensagem = Helpers::verificarLogin($nomeFuncao);
//         $this->assertEquals("Usuário logado como: " . $nomeFuncao, $mensagem);
//     }
    
//     public function testVerificarLoginDelete() {
//         $nomeFuncao = "Delete";
//         $mensagem = Helpers::verificarLogin($nomeFuncao);
//         $this->assertEquals("Usuário logado como: " . $nomeFuncao, $mensagem);
//     }
// }


?>
