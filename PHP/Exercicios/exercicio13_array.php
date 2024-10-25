<?php

$lista_usuarios= ["Ana","Pedro","nathan","Ricardo","Ingrid","felipe","Vitor","arthur","Manu","laura"]; 
$nome_lh= "Vitor";


$indice = array_search("$nome_lh", $lista_usuarios);

if ($indice !== false) {
    echo "Vitor foi encontrada na posição = ". $indice;
}
 else {
    echo "Vitor não foi encontrata na lista de frutas"; 
 }

 ?>

