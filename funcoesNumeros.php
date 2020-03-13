<?php

    /*
     * number_format
     * round — Arredonda um número
     * ceil — Arredonda frações para cima
     * floor — Arredonda frações para baixo
     * rand — Gera um inteiro aleatório
     */
    $db = 1234.56;
    $preco = number_format($db, 2, ",",".");
    echo "O valor do produto e $preco <br>";

    echo round(3.2)."<br>"; //3 <5 arrendonda para baixo, >=5 para cima
    echo ceil(3.2)."<br>"; //4 Arredonda para cima
    echo floor(3.2)."<br>"; //3 Arredonda para baixo
    echo rand(1, 20);//Gera numeros aleatórias entre 1 a 20

    /*
    abs — Valor absoluto
    acos — Cosseno Inverso (arco cosseno)
    acosh — Cosseno Hiperbólico Inverso
    asin — Seno Inverso (arco seno)
    asinh — Seno Hiperbólico Inverso
    atan2 — Tangente inversa de duas variáveis
    atan — Tangente Inversa (arco tangente)
    atanh — Tangente hiperbólica inversa
    base_convert — Converte um número entre bases arbitrárias
    bindec — Binário para decimal
    cos — Coseno
    cosh — Cosseno hiperbólico
    decbin — Decimal para binário
    dechex — Decimal para hexadecimal
    decoct — Decimal para octal
    deg2rad — Converte o número em graus ao equivalente em radianos
    exp — Calcula o expoente de e
    expm1 — Retorna exp(numero) - 1, computado de forma que é preciso mesmo quando o valor do número é perto de zero.
    fmod — Retorna o resto em ponto flutuante (módulo) da divisão dos argumentos
    getrandmax — Retorna o maior valor aletório possível
    hexdec — Hexadecimal para decimal
    hypot — Calcula o tamanho da hipotenusa de um ângulo reto do triângulo Retorna a raiz quadrada de (num1*num1 + num2*num2)
    intdiv — Dividir números inteiros
    is_finite — Verifica se um valor é um número finito
    is_infinite — Descrição
    is_nan — Verifica se um valor não é um número
    lcg_value — Gerador congruente linear combinado
    log10 — Logaritmo Base-10
    log1p — Retorna o log(1 + numero), calculado de forma que o valor do número seja próximo de zero.
    log — Logaritmo natural
    max — Localiza o maior valor
    min — Encontra o menor valor
    mt_getrandmax — Retorna o maior valor aletório possível
    mt_rand — Gerador melhorado de números aleatórios
    mt_srand — Semeia o gerador melhorado de números aleatórios
    octdec — Octal para decimal
    pi — Obtém o valor de pi
    pow — Potência
    rad2deg — Converte o número em radianos para o equivalente em graus
    sin — Seno
    sinh — Seno hiperbólico
    sqrt — Raiz quadrada
    srand — Semeia o gerador de números aletórios
    tan — Tangente
    tanh — Tangente hiperbólica
    */