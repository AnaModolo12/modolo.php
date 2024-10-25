<?php

//criando a array lista_coisas
$lista_coisas = [];

//criando uma array frutas, dentro da array lista_coisas 
$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morngo', 'Uva'];

//criando uma array pessoas, dentro da array lista_coisas 
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

echo '<pre>';
print_r ($lista_coisas);
echo '</pre>';

//alterando o terceiro valor da arry FRUTAS 
$lista_coisas ['frutas'][2] = 'Abacaxi ';

//alterando o segundo valor da array PESSOAS 
$lista_coisas ['pessoas'][1] = 'carlos'; 

echo "o terceiro valor da array FRUTAS agora é:"; 
echo $lista_coisas ['frutas'][2]; 

echo "<hr>"; 

echo "o segundo valor da array PESSOAS agora é;";
echo $lista_coisas ['pessoas'][1];

echo '<pre>';
print_r ($lista_coisas);
echo '</pre>';

echo "<hr>";


?>