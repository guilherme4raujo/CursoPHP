<div class="titulo">Desafio PI</div>

<?php
echo '<br>';
echo pi();

echo'<br>';
echo'<br>';

var_dump (pi());

echo "<br>";
echo "<br>";

$pi = 3.14;
var_dump($pi);

$pierrado = 2.8;

if($pi - pi() <= 0.01) {

    echo "<br> iguais!";
 
}

if($pi - $pierrado <= 0.01){
    
   echo "<br>Igual!";

} else{

  echo "<br>Diferente!";
}
