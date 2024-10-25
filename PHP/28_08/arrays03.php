<?php

//crianda a array de frutas
$lista_frutas = ["banana", "Maçã", "Morango", "Uva"]; 

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo"<hr>";
echo '</pre>'; 

echo '<pre>';
//alterando o Valor 0 -> banana para melancia 
$lista_frutas[0]= "Melancia"; 
print_r ($lista_frutas);
echo '</pre>'; 

echo "<br>";

echo $lista_frutas[0];

?>