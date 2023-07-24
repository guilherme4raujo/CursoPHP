<div class="titulo">Desafio operadores logicos</div>

<!--
/ Dois trabalhos > Terça e quinta!
// Se os dois forem executados -> TV 50' e Sorvete
// Se apenas um for executado -> TV 32' e Sorvete
// Se nenhum for executado -> Fica em casa!
-->

<form action="#" method ="post">
<div>

    <label for="t1">Trabalho 1 (terça);</label>    
        <select name="t1" id="t1">

            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
            
        </select>

    <label for="t2">Trabalho 2 (Quinta);</label>    
        <select name="t2" id="t2">

            <option value="1">Executado</option>
            <option value="0">Não Executado</option>

        </select>

</div>
<button>
    Executar!
</button>


</form>

<style>
    button,select{
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST ['t1'];
echo $_POST ['t2'];

