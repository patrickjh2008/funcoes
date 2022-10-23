
<?php
function imprimirMensagens() 
{
    echo "Vamos programar? <br>";
    echo "Vamos aprender funções em PHP!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<br>";

$variavel = 1;

function trocaValor() 
{
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo "<br>";

function trocaValorDeVerdade() 
{
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";