<div class="titulo">Break/Continue</div> 

<?php

/*$cont=16;

for(;;){
    echo  "$cont <br>";
    $cont++;
    if($cont > 20){
        break;
}
*/

$cont=16;
echo "$cont<br>";
    for(;;){
        $cont++;
        if($cont % 2 === 1){
            continue;
        }
        echo "$cont<br>";
        if($cont>=30){
            break;
        }
    }


foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 6) break;
    if($valor % 2 === 0){
        continue;
    }

    echo"<br>$valor";


}    


echo  "<br> Fim! <br>";