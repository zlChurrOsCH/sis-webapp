<?php
use PHPUnit\Framework\TestCase;
use Projeto\Unit\EmailSender;
use Projeto\Unit\EmailService;

class EmailSenderTest extends TestCase {
    public function testSendEmail() {
        // Criar um mock para a classe EmailService
        $emailServiceMock = $this->getMockBuilder(EmailService::class)
            ->onlyMethods(['send'])
            ->getMock();

        // Definir expectativas para o método send no mock
        $emailServiceMock->expects($this->once())
            ->method('send')
            ->with(
                $this->equalTo('destinatario@example.com'),
                $this->equalTo('Assunto do e-mail'),
                $this->equalTo('Conteúdo do e-mail')
            );

        // Criar uma instância do EmailSender com o mock do EmailService
        $emailSender = new EmailSender($emailServiceMock);

        // Chamar o método sendEmail
        $emailSender->sendEmail('destinatario@example.com', 'Assunto do e-mail', 'Conteúdo do e-mail');
    }
}
?>