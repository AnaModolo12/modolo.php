<?php

$frutas= ["maça","banana","laranja"];

$valor= "laranja";

if (in_array ("valor", $frutas)) {
    echo "$valor esta na lista de frutas. ";
}
 else {
    echo "$valor não esta na lista de frutas. "; 
}

?>

