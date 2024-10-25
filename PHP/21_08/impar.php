<?php

 // definir uma constante para o número máximo 
 define ('NUM_MAX', 20);

 //inicialização a variável de contador com o valor do primeiro numero ímpar
 $contador = 1; 
 
 //utizilar um loop do-while para imprimir os números ímpares menores ou igual ao número máximo 
  do{
    echo $contador. "<br>";
    $contador+=2; 
  } while ($contador <= NUM_MAX);

?>