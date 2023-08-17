<?php

namespace Projeto\Unit\Classes;

class Usuario {
    public $username;
    public $password;
    public $funcao;

    public function __construct($username, $password, $funcao) {
        $this->username = $username;
        $this->password = $password;
        $this->funcao = $funcao;
    }
}
?>