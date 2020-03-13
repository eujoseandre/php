<?php
    $numero = 8;

    if($numero == 10):
        echo "Numero igual a 10";
    elseif ($numero < 10):
        echo "Numero menor que 10";
    else:
        echo "Numero maior que 10";
    endif;
    echo "<br>";

    /////////

    //Operador Ternário

    $media = 6;
    echo ($media >= 7)? "Aprovado!": "Reprovado";
