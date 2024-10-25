<?php
// Texto que aparecerá no front end
echo "Insira um número inteiro positivo:";


// Inserir o valor
$numero = 50;
if ($numero <= 0) {
    echo "Número inválido. Deve ser um inteiro positivo.\n";
    exit;
}

// Aparecendo as divisões
$par = 2;
while ($par <= $numero) {
    echo $par . "\n";
    $par += 2;
}
?>