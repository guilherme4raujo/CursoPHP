<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class = 'divisao'> V ou F </p>";
echo "<br>";

var_dump(true);
echo '<br>';

var_dump(!!!true);

echo "<p class = 'divisao'>Tabela Verdade 'AND' </p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<br><p class = 'divisao'>Tabela Verdade 'OR' </p><hr>";

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<br><p class = 'divisao'>Tabela Verdade 'XOR' </p><hr>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<br><p class = 'divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar!";

}else if ($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar!";

}else{
    echo "Trabalhe mais um pouco!";
}

