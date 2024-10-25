<?php

$frutas= ["maça","banana", "laranja"]; 

$indice = array_search("banana", $frutas);

if ($indice !== false) {
    echo "banana foi encontrada na posição = ". $indice;
}
 else {
    echo "banana não foi encontrata na lista de frutas"; 
 }

 ?>