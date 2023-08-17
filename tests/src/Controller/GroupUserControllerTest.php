<?php

use PHPUnit\Framework\TestCase;
use Projeto\Unit\Controller\GroupUserController;

class GroupUserControllerTest extends TestCase {
    public function testAtribuirFuncao() {
        $groupUserController = new GroupUserController();

        $nomeFuncao = [
            "ID" => 3,
            "Name" => "Alice",
            "Key" => "xyz789"
        ];

        $funcaoAtribuida = $groupUserController->atribuirFuncao($nomeFuncao);
        $this->assertEquals("Post", $funcaoAtribuida);

        $nomeFuncaoInvalida = [
            "ID" => 7,
            "Name" => "Bob",
            "Key" => "123abc"
        ];

        $funcaoAtribuidaInvalida = $groupUserController->atribuirFuncao($nomeFuncaoInvalida);
        $this->assertNull($funcaoAtribuidaInvalida);
    }
}




// use Projeto\Unit96\Controller\Helpers;
// use Projeto\Unit96\Controller\GroupUserController;

// class GroupUserControllerTest extends TestCase {
//     public function testProcessarLogin() {
//         $nomeFuncao = "Admin";

//         // Criar um mock para Helpers
//         $helpersMock = $this->getMockBuilder(Helpers::class)
//                             ->getMock();
        
//         $helpersMock->expects($this->once())
//                             ->method('verificarLogin')
//                             ->with($nomeFuncao)
//                             ->willReturn("Usuário logado como: " . $nomeFuncao);
                            
//         // Instanciar GroupUserController e passar o mock de Helpers
//         $groupUserController = new GroupUserController($helpersMock);

//         // Chamar o método para processar o login
//         $resultado = $groupUserController->processarLogin($nomeFuncao);

//         // Verificar se o resultado é o esperado
//         $this->assertEquals("Usuário logado como: " . $nomeFuncao, $resultado);
//     }
// }

?>
