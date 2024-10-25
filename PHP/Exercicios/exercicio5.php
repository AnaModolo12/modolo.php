<?php

 //use o for dentrodo function para exibir os numeros de 1 a 10 
function multiplicacao ($tabuada) { 
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $tabuada * $i;
        echo "$tabuada x $i = $resultado <br>";  
    } 
}

$tabuada = 3; 
multiplicacao ($tabuada); 


?> 