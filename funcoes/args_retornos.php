<div class="titulo">Argumentos & Retornos</div>

<?php
echo "<br>";

function obterMensagem(){
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo "<br>", obterMensagem();
echo "<br>";

var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo "<br>", obterMensagemComNome('Guilherme');
echo "<br>", obterMensagemComNome('Gustavo');

function soma($a, $b){
    return $a + $b;
}
$x = 5;
$y = 20;
echo "<br>", soma(4,5);
echo "<br>", soma(45,78);
echo "<br>", soma($x,$y);