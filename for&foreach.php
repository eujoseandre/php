<?php

    for($cont = 0; $cont <= 10; $cont++):
        echo "Contador e $cont<br>";
    endfor;
    echo "<br>";

    ///////

    //Percorrer Arrays com Foreach

    $cores = array ("verde", "amarelo", "laranja", "azul");
    foreach($cores as $indice => $valor):
        echo $indice. ": " .$valor."<br>";
    endforeach;