<?php

    /*
     * PRINCIPAIS
     * strtoupper — Converte uma string para maiúsculas
     * strtolower — Converte uma string para minúsculas
     * substr — Retorna uma parte de uma string
     * str_pad — Preenche uma string para um certo tamanho com outra string
     * str_repeat — Repete uma string
     * strlen — Retorna o tamanho de uma string
     * str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
     * strpos — Encontra a posição da primeira ocorrência de uma string
     */

    $nome = "Andre Souza";
    $novo_nome = strtoupper($nome);
    echo $novo_nome."<br>";

    $novo_nome = strtolower($nome);
    echo $novo_nome."<br>";

    $mensagem = "Ola mundo";
    echo substr($mensagem, 4)."<br>";
    echo substr($mensagem, 4,3)."<br>";

    $objeto = "caneta"; //ESPECIONE NO CHROME
    $novo_objeto = str_pad($objeto, 10);
    echo $novo_objeto."<br>";
    $novo_object = str_pad($objeto, 10, "*");
    echo $novo_object."<br>";
    $new_object = str_pad($objeto, 10, "*", STR_PAD_LEFT);
    echo $new_object."<br>";

    $string = str_repeat("Sucesso! ", 5);
    echo $string."<br>";

    $msg = "Ola devs PHP";
    echo strlen($msg)."<br>";

    $nova_msg = str_replace("devs", "Programadores", $msg);
    echo $nova_msg."<br>";
    echo strpos($msg, "PHP");

    /*
    addcslashes — String entre aspas com barras no estilo C
    addslashes — Adiciona barras invertidas a uma string
    bin2hex — Converte um dado binário em representação hexadecimal
    chop — Sinônimo de rtrim
    chr — Retorna um caracter específico
    chunk_split — Divide uma string em pequenos pedaços
    convert_cyr_string — Converte de um conjunto caracteres cirílico para outro
    convert_uudecode — Decodifica uma string codificada com uuencode
    convert_uuencode — Codifica com uuencode uma string
    count_chars — Retorna informações sobre os caracteres usados numa string
    crc32 — Calcula polinômio crc32 de uma string
    crypt — Encriptação unidirecional de string (hashing)
    echo — Exibe uma ou mais strings
    explode — Divide uma string em strings
    fprintf — Escreve uma string formatada para um stream
    get_html_translation_table — Retorna a tabela de tradução usada por htmlspecialchars e htmlentities
    hebrev — Converte texto lógico Hebraico para texto visual
    hebrevc — Converte um texto lógico Hebráico para um texto visual com conversão newline
    hex2bin — Decodes a hexadecimally encoded binary string
    html_entity_decode — Converte todas as entidades HTML para os seus caracteres
    htmlentities — Converte todos os caracteres aplicáveis em entidades html.
    htmlspecialchars_decode — Converte especiais entidades HTML para caracteres
    htmlspecialchars — Converte caracteres especiais para a realidade HTML
    implode — Junta elementos de uma matriz em uma string
    join — Sinônimo de implode
    lcfirst — Torna minúsculo o primeiro caractere de uma string
    levenshtein — Calcula a distância Levenshtein entre duas strings
    localeconv — Obtém a informação da formatação numérica
    ltrim — Retira espaços em branco (ou outros caracteres) do início da string
    md5_file — Calcula hash md5 de um dado arquivo
    md5 — Calcula o "hash MD5" de uma string
    metaphone — Calcula a metaphone key de uma string
    money_format — Formata um número como uma string de moeda
    nl_langinfo — Retorna informação de linguagem e local
    nl2br — Insere quebras de linha HTML antes de todas newlines em uma string
    number_format — Formata um número com os milhares agrupados
    ord — Retorna o valor ASCII do caractere
    parse_str — Converte a string em variáveis
    print — Mostra uma string
    printf — Mostra uma string formatada
    quoted_printable_decode — Converte uma string quoted-printable para uma string de 8 bit
    quoted_printable_encode — Converte uma string de 8 bits em uma string quoted-printable
    quotemeta — Adiciona uma barra invertida antes dos meta caracteres
    rtrim — Retira espaço em branco (ou outros caracteres) do final da string
    setlocale — Define informações locais
    sha1_file — Calcula a hash sha1 de um arquivo
    sha1 — Calcula a hash sha1 de uma string
    similar_text — Calcula a similaridade entre duas strings
    soundex — Calcula a chave soundex de uma string
    sprintf — Retorna a string formatada
    sscanf — Interpreta a entrada de uma string de acordo com um formato
    str_getcsv — Analisa uma string CSV e retorna os dados em um array
        str_ireplace — Versão que não diferencia maiúsculas e minúsculas de str_replace.
    str_rot13 — Executa a transformação rot13 em uma string
    str_shuffle — Mistura uma string aleatoriamente
    str_split — Converte uma string para um array
        str_word_count — Retorna informação sobre as palavras usadas em uma string
    strcasecmp — Comparação de strings sem diferenciar maiúsculas e minúsculas segura para binário
    strchr — Sinônimo de strstr
    strcmp — Comparação de string segura para binário
    strcoll — Comparação de string baseada no local
    strcspn — Encontra o tamanho do segmento inicial que não contenha a máscara
    strip_tags — Retira as tags HTML e PHP de uma string
    stripcslashes — Desfaz o efeito de addcslashes
    stripos — Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas
    stripslashes — Desfaz o efeito de addslashes
    stristr — strstr sem diferenciar maiúsculas e minúsculas
    strnatcasecmp — Comparação de strings sem diferenciar maiúsculas/minúsculas usando o algoritmo "natural order"
    strnatcmp — Comparação de strings usando o algoritmo "natural order"
    strncasecmp — Comparação de string caso-sensitivo de Binário seguro dos primeiros n caracteres
    strncmp — Comparação de string segura para binário para os primeiros n caracteres
    strpbrk — Procura na string por um dos caracteres de um conjunto
    strrchr — Encontra a ultima ocorrência de um caractere em uma string
    strrev — Reverte uma string
    strripos — Encontra a posição da última ocorrência de uma string case-insensitive em uma string
    strrpos — Encontra a posição da última ocorrência de um caractere em uma string
    strspn — Encontra o comprimento do segmento inicial combinando com a máscara
    strstr — Encontra a primeira ocorrencia de uma string
    strtok — Tokeniza uma string
    strtr — Traduz certos caracteres
    substr_compare — A comparação binária entre duas strings de um offset até o limite do comprimento de caracteres
    substr_count — Conta o número de ocorrências de uma substring
    substr_replace — Substitui o texto dentro de uma parte de uma string
    substr — Retorna uma parte de uma string
    trim — Retira espaço no ínicio e final de uma string
    ucfirst — Converte para maiúscula o primeiro caractere de uma string
    ucwords — Converte para maiúsculas o primeiro caractere de cada palavra
    vfprintf — Escreve uma string formatada para um stream
    vprintf — Mostra uma string formatada
    vsprintf — Retorna uma string formatada
    wordwrap — Quebra uma string em um dado número de caracteres
    */