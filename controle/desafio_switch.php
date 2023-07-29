<div class="titulo">Desafio Switch</div>

<form action="#" method="POST">
    <input type="text" name = "param">
        <select name="conversao" id="conversao">
                <option value="km-milha">KM > MILHA</option>
                <option value="milha-km">MILHA > KM</option>
                <option value="metro-km">METROS > KM</option>
                <option value="km-metro">KM > METROS</option>
                <option value="c-fahrenheit">C > FAHRENHEIT</option>
                <option value="fahrenheit-c">FAHRENHEIT > C</option>
                    
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


$param = $_POST["param"] ?? 0;

switch($_POST['conversao']){
    case 'km-milha';
        $distancia = $param * 0.621371;
        echo "<br> A distância é de $distancia" . ' milhas';
        break;

    case 'milha-km';
        $distancia  = $param / 0.621371;
        echo "<br>A distância é de $distancia " . ' quilômetros';
        break;

    case 'metro-km';
        $distancia = $param /1000;
        echo "<br>A distância é de $distancia " . ' quilômetros';
        break;
  
    case 'km-metro';
        $distancia = $param * 1000;
        echo"<br>A distância é de $distancia " . ' metros';
        break;

    case 'c-fahrenheit';
        $distancia = ($param * 1.8) + 32;
        echo"<br>A temperatura é de $distancia " . ' fahrenheit';
        break;

    case 'c-fahrenheit';
        $distancia = ($param * 1.8) + 32;
        echo"<br>A temperatura é de $distancia " . ' fahrenheit';
        break;

    case 'fahrenheit-c';
        $distancia = ($param - 32) / 1.8;
        echo"<br>A temperatura é de $distancia " . ' graus Celsius';
        break;
    
    default:
    echo "<p><br>Nenhum valor calculado</p>";    
};


