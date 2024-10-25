<?php

$usuarios= [
    [ "id"=> "1",
      "nome"=>"Joao",
      "email"=> "Joao.com.br"], 
    [ "id"=> "2",
      "nome"=>"Ana",
      "email"=> "Ana@exemplo.com"], 
    [ "id"=> "3",
      "nome"=>"Pedro",
      "email"=> "Pedro@hotmail.com"], 
];

$busca= "Ana@exemplo.com";

echo '<pre>'; 
print_r($usuarios); 
echo '</pre>';

$indice= array_search($busca, array_column($usuarios, 'email')); 

if ($indice !== false) {
  echo "busca foi encontrada com o ID;". $usuarios [$indice]['id']; 
}
else { 
  echo "$busca, não foi encontrada na lista de usuarios."; 
}

?>


