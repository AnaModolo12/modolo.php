<?php

//criando a array Cadastro 
$Cadastro = []; 

//criando uma array Usuario, dentro da array Cadastro
$Cadastro ['Usuario'] = ['João', 'Maria', 'Pedro'];

//criando uma array Senha, dentro da array Cadastro
$Cadastro ['Senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r ($Cadastro);
echo '</pre>';

//alterando o segundo valor da array Usuario
$Cadastro ['Usuario'][1] = 'Ana';

//alterando o segundo valor da array Senha 
$Cadastro ['Senha'][1] = 'efgh'; 

echo "o terceiro valor da array USUARIO agora é: "; 
echo $Cadastro ['Usuario'][1]; 

echo "<hr>"; 

echo "o segundo valor da array SENHA agora é: ";
echo $Cadastro ['Senha'][1];

echo '<pre>';
print_r ($Cadastro);
echo '</pre>';

