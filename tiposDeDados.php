<?php
    //Tipos Escalares

    $frase = "Ola mundo, como vai?";
    var_dump($frase);

    if(is_string($frase)):
        echo "E uma String";
    else:
        echo "Nao e uma String";
    endif;
    echo "<hr>";

    //Int
    $idade = 20;
    var_dump($idade);

    if(is_int($idade)):
        echo "E um int";
    else:
        echo "Nao e uum int";
    endif;
    echo "<hr>";

    //Float
    $altura = 1.70;
    var_dump($altura);

    if(is_float($altura)):
        echo "E um float";
    else:
        echo "Nao e um float";
    endif;
    echo "<hr>";

    //booolean

    $isAdmin = true;
    var_dump($isAdmin);

    if(is_bool($isAdmin)):
        echo "E um booleano";
    else:
        echo "Nao e um booleano";
    endif;
    echo "<hr>";

    //Tipos compostos

    $carros = array("Gol", "Uno", "Palio", 12, true, 1.70);
    var_dump($carros);

    if(is_array($carros)):
        echo "E um array";
    else:
        echo "Nao e um Array";
    endif;
    echo "<hr>";

    //object

    class Cliente {
        public $nome;
        public function atribuirNome($nome){
            $this->nome = $nome;
        }
    }

    $andre = new Cliente();
    $andre->atribuirNome("andre");
    var_dump($andre);

    if(is_object($andre)):
        echo "E um object";
    else:
        echo "Nao e um object";
    endif;

    // Especiais
    //Resource