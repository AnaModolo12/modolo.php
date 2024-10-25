<?php

// Interar 1 a 10 
for ($numero = 1; $numero <= 10; $numero++) {
     
    // classificação 
    if ($numero >= 1 && $numero <= 3) {
     $categoria = "baixo"; 
    } elseif ($numero >= 4 && $numero <=7 ) {
     $categoria = "medio"; 
    } elseif ($numero >= 8 && $numero <=10 ) {
    $categoria = "alto";

}

//verificar se o numero é par ou ímpar usando operador ternário
$tipo = ($numero % 2 ==0) ? "par" : "ímpar";

//Imprimir a mensagem
echo "o numeoro $numero é $tipo e está na categoria $categoria. <br>";  
}
?>