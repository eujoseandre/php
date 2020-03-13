<?php

    function exibirNome($nome){
        echo "Meu nome e $nome";
    }
    exibirNome("Mateus");
    echo "<br>";

    function calcularMedia($nome, $nota1, $nota2, $nota3){
        $nota = ($nota1 + $nota2 + $nota3)/3;
        $media = round($nota);
        echo "O aluno $nome, obteve media igual a: $media<br>";
    }
    calcularMedia("Luiz", 9, 8, 7);
    calcularMedia("Fabio", 10, 8, 10);