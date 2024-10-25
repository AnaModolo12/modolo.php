<?php
 
 //declarei as variáveis 
$nota1 = 7;
$nota2 = 6; 
$nota3 = 10;
$media = ($nota1 + $nota2 + $nota3 ) /3; 

//definir se a nota é maior ou menos que 7 utilizamos if ou else 
 if ($media >= 7) {
    echo 'aluno aprovado';
 } else {
    echo 'o aluno não atingiu as expectativas';
 }

 //imprimi a nota de cada etapa e sua média 
 echo "<br> nota 1: $nota1 <br>"; 
 echo "nota 2: $nota2 <br>";
 echo "nota 3: $nota3 <br>";
 echo "a média do aluno foi: $media <br>";

 ?>