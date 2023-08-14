<div class="titulo"> Map & Filter</div>
<?php
echo "<hr>";
echo "<br>";

$notas = [5.8, 7.3, 9.8, 6.7]; 
$notasFinais =[];

foreach($notas as $nota){
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

//echo"<br>";
//$notasFinais2 = array_map(round, $notas);
//echo"<br>";
//print_r($notasFinais2);

$apenasOsAprovados1 = [];

foreach($notas as $nota){
    if($nota >=7) {
        $apenasOsAprovados1[] = $nota;
    }
}
echo "<br>";
print_r($apenasOsAprovados1);

//function aprovados($nota) {
//    return $nota >= 7;
//}
//echo "<br>";
//$apenasOsAprovados2 = array_filter($notas, aprovados);
//print_r($apenasOsAprovados2);


