<form>
    <label>Informe um valor:</label>
    <input type="text" name="valor">
    <button>Enviar</button>
</form>

<?php

    if(isset($_GET['valor'])){
        $valor = $_GET['valor'];
        if ($valor >= 10){
            echo "o valor ".$valor." é maior ou igula a 10!";
        }else{
            echo "o valor ".$valor." não é maior ou igual a 10!";
        }
    }

?>