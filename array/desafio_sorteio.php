<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza" , "Rapunzel", "Branca de Neve", "Cinderela"];
$index = array_rand($nomes);

echo "<br><h1> $nomes[$index] </h1>";