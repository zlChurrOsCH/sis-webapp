<?php

use PHPUnit\Framework\TestCase;
use Projeto\Unit\Autenticacao;

class AutenticacaoTest extends TestCase {
    private $autenticacao;

    // Configuração inicial antes de cada teste
    protected function setUp(): void {
        $this->autenticacao = new Autenticacao();
    }

    /**
     * Testa diferentes cenários de autenticação.
     *
     * @dataProvider dadosCenariosDeAutenticacao
     *
     * @param string $username Usuário para autenticação.
     * @param string $password Senha para autenticação.
     * @param string $esperado Mensagem de autenticação esperada.
     */
    public function testeCenariosDeAutenticacao($username, $password, $esperado) {
        $autenticacao = new Autenticacao();
        //echo "Usuário verificado!\n";
        $mensagem = $this->autenticacao->gerarMensagem($username, $password);
        
        // Verifica se a mensagem é igual ao esperado
        $this->assertEquals($esperado, $mensagem);
    }

    /**
     * Fornece dados de teste para diferentes cenários de autenticação.
     *
     * @return array Conjunto de dados de teste.
     */
    public static function dadosCenariosDeAutenticacao() {
        return [
            // [Usuário, Senha, Mensagem Esperada]
            'Acesso Admin Sucesso' => ['admin', 'senhaAdmin', 'Usuário autenticado como admin'],
            'Acesso Get Sucesso' => ['getuser', 'senhaGet', 'Usuário autenticado como getuser'],
            'Acesso Delete Sucesso' => ['deleteuser', 'senhaDelete', 'Usuário autenticado como deleteuser'],
            'Acesso Post Sucesso' => ['postuser', 'senhaPost', 'Usuário autenticado como postuser'],
            'Acesso Put Sucesso' => ['putuser', 'senhaPut', 'Usuário autenticado como putuser'],
            'Acesso Leitura Sucesso' => ['leiturauser', 'senhaLeitura', 'Usuário autenticado como leiturauser'],
            'Acesso Admin Falhou' => ['admin', 'senhaGet', 'Falha na autenticação'],
            'Acesso Get Falhou' => ['getuser', 'senhaAdmin', 'Falha na autenticação'],
            'Acesso Delete Falhou' => ['deleteuser', 'senhaPost', 'Falha na autenticação'],
            'Acesso Post Falhou' => ['postuser', 'senhaDelete', 'Falha na autenticação'],
            'Acesso Put Falhou' => ['putuser', 'senhaLeitura', 'Falha na autenticação'],
            'Acesso Leitura Falhou' => ['leiturauser', 'senhaPut', 'Falha na autenticação'],
        ];
    }
}
?>