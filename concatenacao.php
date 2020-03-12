<?php

    //Tudo que estiver em aspas simples é considerado texto.
    $nome = 'Andre';
    echo 'Meu nom e $nome';
    echo "<br>";

    $sobrenome = 'Souza';
    echo "Meu sobrenome e $sobrenome";
    echo "<br>";

    //Concatenação
    echo 'Meu nome e ' .$nome. ', e meu \'sobrenome\' e ' .$sobrenome;
    echo "<br>";
    echo "Meu nome e $nome e meu \"sobrenome\" e $sobrenome";