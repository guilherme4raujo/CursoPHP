<div class="titulo">Laço For</div>

<?php
//Como percorrer um Arrays ? 
$matriz = [ // --> Esta é a Matriz!

    ["a", "e", "i", "o", "u"],
    ["b", "c", "d"]
];
echo "<br>";

// Um laço for dentro do outro! : 
for($i=0; $i < count($matriz); $i++) {
    for($j = 0; $j < count($matriz[$i]); $j++){
    
        echo "{$matriz[$i][$j]} <br>"; 
    }
    echo "{$matriz[$i][$j]} <br>"; 
}


