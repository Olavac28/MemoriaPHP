<?php
    class animal {
        public function comer() {
            echo "comi";
        }
    }

    class cachorro extends animal {
        private $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        public function ola() {
            echo "olá eu sou um cachorro e meu nome é ".$this->nome.", aliás, au au";
        }
    }

    $c = new Cachorro("Alberto");
    $c->ola();
    echo "<br>";
    $c->comer();
?>