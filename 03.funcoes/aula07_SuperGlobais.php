<?php
    $x = 3;
    $y = 2;

    function soma() {
        //echo $x + $y; nn pode
    }
    soma();

    echo "<br>";

    function soma2() {
       echo $GLOBALS['x'] + $GLOBALS['y']; //geito certo de acessar variáveis globais
    }
    soma2();

    echo "<br>";

    //faz certas funções
    echo $_SERVER['PHP_SELF']; //caminho de pastas
    echo "<br>";
    echo $_SERVER['SERVER_NAME']; //nome do server
    //coloque $_SERVER php no google para saber mais
?>