<?php

namespace Projeto\Unit;

require_once 'classes/Usuario.php';
require_once 'classes/Funcoes.php';
require_once 'apis/ApiLogin1.php';
require_once 'apis/ApiLogin2.php';
require_once 'apis/Api3.php';
require_once 'apis/Api4.php';
require_once 'apis/Api5.php';
require_once 'vendor/autoload.php';

// Definir usuários e permissões
$usuarios = [
    new Usuario("admin", "senhaAdmin", "admin"),
    new Usuario("getuser", "senhaGet", "get"),
    new Usuario("deleteuser", "senhaDelete", "delete"),
    new Usuario("postuser", "senhaPost", "post"),
    new Usuario("putuser", "senhaPut", "put"),
    new Usuario("leiturauser", "senhaLeitura", "leitura")
];

// Simular autenticação através das APIs de terceiros
$apiLogin1 = new ApiLogin1();
$apiLogin2 = new ApiLogin2();
$apiLoginResult = $apiLogin1->autenticar();

if (!$apiLoginResult) {
    $apiLoginResult = $apiLogin2->autenticar();
}

if ($apiLoginResult) {
    // Simulação de recebimento de dados do banco de dados
    $dadosDoBanco = ["chave" => "valor"];

    // Usuário autenticado - realizar operações
    $funcoes = new Funcoes(...$usuarios);

    // Exemplo de operações com permissões diferentes
    $funcoes->realizarOperacao($dadosDoBanco, 'get');
    $funcoes->realizarOperacao(["chave" => "novo valor"], 'post');
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
    <title>Teste de Integração e Controle de Acesso</title>
</head>
<body>
    <h1>Teste de Integração e Controle de Acesso</h1>

    <form action="index.php" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if (Autenticacao::autenticar($username, $password)) {
            echo "<p>Usuário autenticado</p>";
            // Aqui você pode executar operações de acordo com as permissões do usuário
        } else {
            echo "<p>Usuário não autenticado</p>";
        }
    }
    ?>
</body>
</html>