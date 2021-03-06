<?php
    /*
    PRINCIPAIS

    is_array($array) = Verifica se uma determinada variavel é um array.
    in_array($valor, $array) = Verifica se um determinado valor existe em alguma posição do Array.
    array_keys — Retorna todas as chaves ou uma parte das chaves de um array.
    array_values — Retorna todos os valores de um array.
    array_merge — Combina um ou mais arrays.
    array_pop — Extrai um elemento do final do array.
    array_shift — Retira o primeiro elemento de um array.
    array_unshift — Adiciona um ou mais elementos no início de um array.
    array_push — Adiciona um ou mais elementos no final de um array.
    array_combine — Cria um array usando um array para chaves e outro para valores.
    array_sum — Calcula a soma dos elementos de um array
     */

    $nomes = array("Primo"=>"Andre", "Irma"=>"Michelle", "Irmao"=>"Antonio", "Tio"=>"Hugo");

    if(is_array($nomes)):
        echo "Eh um Array";
    else:
        echo "Nao eh um Array";
    endif;
    echo "<br>";

    ////////////////

    //Retorna 1 para vdd, e nada para falso.
    if(in_array("Michelle", $nomes)):
        echo "Existe no Array";
    else:
        echo "Nao existe no Array";
    endif;
    echo"<br>";

    ///////////

    $keys = array_keys($nomes);
    print_r($keys);
    echo "<br>";

    //////////////

    $values = array_values($nomes);
    print_r($values);
    echo "<br>";

    //////////////

    $carros = array("Gol", "Palio", "Paraty");
    $motos = array("Pop100", "Honda 150", "Honda Bis");
    $veiculos = array_merge($carros, $motos);
    print_r($veiculos);
    echo "<br>";

    ///////////

    echo array_pop($veiculos); //mostar qual ele excluiu
    echo "<br>";
    print_r($veiculos);
    echo "<br>";

    ////////////

    print_r($veiculos);
    echo "<br>";
    echo array_shift($veiculos);
    echo "<br>";
    print_r($veiculos);
    echo "<br>";

    //////////

    $frutas = ["Manga", "Morango", "Goiaba"];
    echo array_unshift($frutas, "Caju", "Acerola"); //Mostra o total de itens com o echo
    echo "<br>";
    print_r($frutas);
    echo "<br>";

    //////////

    echo array_push($frutas, "Melao", "Jabuticaba"); //Mostra o total de itens com o echo
    echo "<br>";
    print_r($frutas);
    echo "<br>";

    //////////

    $keys = array("Campeao", "Vice", "Terceiro");
    $values = array("Gremio", "Internacional", "Sao Paulo");
    $resultado = array_combine($keys, $values);
    print_r($resultado);
    echo "<br>";

    //////////

    $soma = array(10, 10, 5);
    echo array_sum($soma);

    /*
    array_change_key_case — Modifica a caixa de todas as chaves em um array
    array_chunk — Divide um array em pedaços
    array_column — Retorna os valores de uma coluna do array informado
    array_count_values — Conta todos os valores de um array
    array_diff_assoc — Computa a diferença entre arrays com checagem adicional de índice
    array_diff_key — Computa a diferença entre arrays usando as chaves na comparação
    array_diff_uassoc — Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
    array_diff_ukey — Computa a diferença entre arrays usando uma função callback na comparação de chaves
    array_diff — Computa as diferenças entre arrays
    array_fill_keys — Preenche um array com valores, especificando chaves
    array_fill — Preenche um array com valores
    array_filter — Filtra elementos de um array utilizando uma função callback
    array_flip — Permuta todas as chaves e seus valores associados em um array
    array_intersect_assoc — Computa a interseção de arrays com uma adicional verificação de índice
    array_intersect_key — Computa a interseção de array comparando pelas chaves
    array_intersect_uassoc — Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
    array_intersect_ukey — Computa a interseção de arrays usando uma função de callback nas chaves para comparação
    array_intersect — Calcula a interseção entre arrays
    array_key_exists — Checa se uma chave ou índice existe em um array
    array_key_first — Gets the first key of an array
    array_key_last — Gets the last key of an array
    array_map — Aplica uma função em todos os elementos dos arrays dados
    array_merge_recursive — Funde dois ou mais arrays recursivamente
    array_multisort — Ordena múltiplos arrays ou arrays multidimensionais
    array_pad — Expande um array para um certo comprimento utilizando um determinado valor
    array_product — Calcula o produto dos valores de um array
    array_rand — Escolhe um ou mais elementos aleatórios de um array
    array_reduce — Reduz um array para um único valor através de um processo iterativo via função callback
    array_replace_recursive — Replaces elements from passed arrays into the first array recursively
    array_replace — Replaces elements from passed arrays into the first array
    array_reverse — Retorna um array com os elementos na ordem inversa
    array_search — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
    array_slice — Extrai uma parcela de um array
    array_splice — Remove uma parcela do array e substitui com outros elementos
    array_udiff_assoc — Computa a diferença entre arrays com checagem adicional de índice, compara dados por uma função de callback
    array_udiff_uassoc — Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
    array_udiff — Computa a diferença de arrays usando uma função de callback para comparação dos dados
    array_uintersect_assoc — Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
    array_uintersect_uassoc — Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas
    array_uintersect — Computa a interseção de array, comparando dados com uma função callback
    array_unique — Remove os valores duplicados de um array
    array_walk_recursive — Aplica um função do usuário recursivamente para cada membro de um array
    array_walk — Aplica uma determinada funcão em cada elemento de um array
    array — Cria um array
    arsort — Ordena um array em ordem descrescente mantendo a associação entre índices e valores
    asort — Ordena um array mantendo a associação entre índices e valores
    compact — Cria um array contendo variáveis e seus valores
    count — Conta o número de elementos de uma variável, ou propriedades de um objeto
    current — Retorna o elemento corrente em um array
    each — Retorna o par chave/valor corrente de um array e avança o seu cursor
    end — Faz o ponteiro interno de um array apontar para o seu último elemento
    extract — Importa variáveis para a tabela de símbolos a partir de um array
    key_exists — Sinônimo de array_key_exists
    key — Retorna uma chave de um array
    krsort — Ordena um array pelas chaves em ordem descrescente
    ksort — Ordena um array pelas chaves
    list — Cria variáveis como se fossem arrays
    natcasesort — Ordena um array utilizando o algoritmo da "ordem natural" sem diferenciar maiúsculas e minúsculas
    natsort — Ordena um array utilizando o algoritmo da "ordem natural"
    next — Avança o ponteiro interno de um array
    pos — Sinônimo de current
    prev — Retrocede o ponteiro interno de um array
    range — Cria um array contendo uma faixa de elementos
    reset — Faz o ponteiro interno de um array apontar para o seu primeiro elemento
    rsort — Ordena um array em ordem descrescente
    shuffle — Mistura os elementos de um array
    sizeof — Sinônimo de count
    sort — Ordena um array
    uasort — Ordena um array utilizando uma função de comparação definida pelo usuário e mantendo as associações entre chaves e valores
    uksort — Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.
    usort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário
    */