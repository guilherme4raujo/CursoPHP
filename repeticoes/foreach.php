<div class="titulo">Foreach</div>

<?php
$array = [
    
   1 => 'Domingo<br>',
    'Segunda <br>',
    'Terça<br>',
    'Quarta<br>',
    'Quinta<br>',
    'Sexta<br>',
    'Sábado<br>',
    
];
   foreach($array as $valor){
    echo "$valor <br>";
   }

   foreach($array as $indice => $valor) {
        echo "$indice => $valor <br>";
   }

   $matriz = [
    ["a", "e", "i", "o", "u"],
    ["b", "c", "d"]

   ];

   foreach($matriz as $linha){
        //echo "$linha<br>";

        foreach($linha as $letras){
            echo "$letras ";
        }
        echo "<br>";
   };

   $numeros = [1, 2, 3, 4, 5];
   foreach ($numero as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
   }
   print_r($numeros);
