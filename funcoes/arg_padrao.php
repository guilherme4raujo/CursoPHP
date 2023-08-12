<div class="titulo">Argumento Padrão</div>

<?php
echo "<br>";
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome! <br>";

}

echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Agua'){
    
    echo "Para comer : $comida<br>";
    echo "Para beber : $bebida<br>";
}
echo "<br>";
anotarPedido('Hamburguer');
echo "<br>";
anotarPedido('Pizza', 'Refrigerante');

echo "<br>";

function anotarPedido2($bebida = 'Agua', $comida){

        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
}

//anotarPedido2('Hamburguer'); => COLOCAR SEMPRE A 
// CONSTANTE SETADA POR ULTIMO PARA EVITAR ESTE PROBLEMA

anotarPedido2('Refrigerante', 'Pizza');