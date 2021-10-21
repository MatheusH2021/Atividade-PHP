<form>
    <label>Informe um valor:</label>
    <input type="text" name="valor">
    <button>Enviar</button>
</form>

<?php

    if(isset($_GET['valor'])){
        $valor = $_GET['valor'];
        if ($valor > 0){
            echo "o valor ".$valor." é positivo!";
        }elseif ($valor == 0){
            echo "o valor ".$valor." é igual a zero!";
        }else{
            echo "o valor ".$valor." é negativo!";
        }
    }

?>