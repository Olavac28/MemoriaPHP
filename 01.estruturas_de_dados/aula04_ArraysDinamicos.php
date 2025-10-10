<?php
    //todo o array é dinamico em php
    $frutas = ["banana", "maça", "pera", "abacate", "abacaxi", "uva", "morango", "limão"];
    if (in_array("banana", $frutas)) { //verifica se o elemento está na lista
        echo "banana está na lista!<br>";
    }

    $frutas[] = "mamão"; //adiciona ao array

    array_pop($frutas); //remove o ultimo
    array_shift($frutas); //remove o primeiro
    
    unset($frutas[0]); //remove por indice
    $indice = array_search("abacaxi", $frutas); //procura o indice
    unset($frutas[$indice]);

    print_r($frutas);
?>