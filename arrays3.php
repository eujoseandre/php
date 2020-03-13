<?php

    $data = "15/11/2000";
    $nova_data = explode('/', $data);
    print_r($nova_data);
    echo "<br>";

    //////////

    $frase = "Meu nome e Andre";
    $array = explode(" ", $frase);
    print_r($array);

    ////////////

    $nomes = ["Andre", "Julia", "Mateus", "Gloria"];
    $string = implode(", ", $nomes);
    echo "<br>";
    echo $string;