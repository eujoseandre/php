<?php

    //Variaveis definidas no escopo global
    $nome = "Jose Andre";
    $a = 1;
    $b = 2;
    $c = 7;

    function exibeNome(){
        //escopo local
        global $nome;
        echo $nome;
    }
    exibeNome();
    echo "<br>";

    function exibeCidade(){
        global $cidade;
        $cidade = "Maceio";
    }
    exibeCidade();
    echo $cidade;
    echo "<br>";

    function soma(){
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }
    soma();