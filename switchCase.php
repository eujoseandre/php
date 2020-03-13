<?php

    $cor = "vermelho";
    switch ($cor):
        case "vermelho":
            echo "Sua cor favorita e vermelho";
            break;

        case "verde":
            echo "Sua cor favorita e verde";
            break;

        case "amarelo":
            echo "Sua cor favorita e amarelo";
            break;

        default:
            echo "Cor nao identificada";
        endswitch;