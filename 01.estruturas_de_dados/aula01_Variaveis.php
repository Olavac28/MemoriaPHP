<?php
    //tipagem fraca e dinâmica
    $nome = "Joãosinho da Silva";
    echo "Meu nome é $nome<br>"; //exibe o valor de $nome
    echo 'Meu nome é $nome<br>'; //literais, exibe o $nome

    $n = 3;
    $n += 2;
    $n++;
    echo $n;

    $n2 = 2;
    $n = $n2++;
    echo "<br>$n $n2";
    $n = ++$n2;
    echo "<br>$n $n2";

    define("N", 23); //constante
    echo "<br>Const: ".N."";
?>