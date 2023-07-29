<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name = "param">
        <select name="conversao" id="conversao">
                <option value="km-milha">KM > MILHA</option>
                <option value="milha-km">MILHA > KM</option>
                <option value="metro-km">METROS > KM</option>
                <option value="km-metro">KM > METROS</option>
                    
        </select>

        <button>Calcular</button>
        <input type="submit" value="Converter">
</form>


<style>

    form > *{
    font-size: 1.8rem;

    }
</style>


<?php

echo $_POST["param"] . '<br>';
echo $_POST["conversao"];


$param = $_POST["param"] = 0;

switch($_POST["conversao"]){
    case 'km-milha';
    $param * 0.621371;
    $distancia = "A distância é de $param" . ' milhas';
    break;

    case 'milha-km';
    $param / 0.621371;
    $distancia = "A distância é de $param" . ' quilômetros';
    break;

    case 'metro-km';
    $param /1000;
    $distancia = "A distância é de $param" . ' quilômetros';
    break;
  
    case 'km-metro';
    $param * 1000;
    $distancia = "A distância é de $param" . ' metros';
    break;

    default
    echo "<p>Nenhum valor calculado</p>";


}