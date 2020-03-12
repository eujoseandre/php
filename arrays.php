<?php
    //ARRAYS

//Dois tipos de declaração de um Array
 $carros = array("BMW", "Veloster", "Hilux");
 $motos = array(0=>"Harley", 1=>"Honda Fan", 2=>"Pop100");
 $clientes = ["Andre", "Daniel", "Felipe", "Dener", "Iva"];

 //Imprimir o array
 print_r($carros);
 print_r($motos);

 echo "<br>";

 echo $carros[0];
 echo "<br>";
 echo $motos[1];

 //Adicionando elementos no Array
 echo "<br>";
 $carros[] = "Amarok";
 print_r($carros);

 //Especificando a posição
 echo "<br>";
 $motos [4] = "Honda Bis";
 print_r($motos);

 //inicializando um Array vazio
echo "<br>";
$avioes = array();
$avioes[] = "Boeing";
$avioes[] = "Airbus";
$avioes[3] = "Nao conheco outro modelo";
print_r($avioes);