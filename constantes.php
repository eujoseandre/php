<?php

    //Constantes

    //O valor da constante é imutável
    define("NOME", "Jose Andre");
    define("NOME", "Jose Carlos");

    define("ALTURA", "1.70");
    define("CURSO","ADS");
    echo 'Meu nome e ' .NOME. ' e minha altura e ' .ALTURA. ', eu faco ' .CURSO;

    define("FUTEBOL", ['Gremio', 'Internacional', 'Sao Paulo']);
    var_dump(FUTEBOL);

    function exibeNome(){
        echo NOME;
    }
    exibeNome();
