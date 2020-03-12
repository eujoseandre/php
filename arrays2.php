<?php

    //Count
    $pessoas = ["Aline", "Joao", "Mateus", "Andre"];
    echo count($pessoas);
    echo "<br>";

    //Atribuindo a variavel
    $quantPessoas = count($pessoas);
    echo "A quantidade de pessoas e $quantPessoas";
    echo "<br>";

    //Percorrer Arrays

    //Foreach
    foreach ($pessoas as $valor) {
        echo $valor. "<br>";
    }

    //Arrays associativos
    $dados = array("nome"=> "Dener", "idade"=> 20, "altura"=> 1.70);
    echo $dados["idade"];
    echo "<br>";
    echo $dados["altura"];

    //Inserindo
    $dados["cidade"] = "Sao Vicente do Sul";
    print_r($dados);
    echo "<br>";

    //Percorrendo o Array com o indice
    foreach ($dados as $indice => $valor){
        echo $indice. ": " .$valor. "<br>";
    }

    //Arrays multidimensionais
    $times = array("Gauchos"=> array("Internacional", "Gremio"),
                    "Paulistas"=> array("Campeao"=> "Sao Paulo", "Vice"=>"Palmeiras", "Terceiro"=>"Santos"),
                    "Alagoanos"=> array("ASA"));
    echo $times["Gauchos"][0];
    echo "<br>";
    echo $times["Paulistas"][1];
    echo "<br>";
    echo $times["Alagoanos"][0];
    echo "<br>";

    foreach ($times["Paulistas"] as $indice => $valor){
        echo $indice. ": " .$valor. "<br>";
    }