<form>
    <label>Informe seu salário:</label>
    <input type="text" name="salario">
    <button>Enviar</button>
</form>

<?php

    if(isset($_GET['salario'])){
        $salario = $_GET['salario'];
        if ($salario <= 300){
            $reajuste = $salario + (50/100*$salario);
            echo "Seu salário reajustado é ".$reajuste;
        }else{
            $reajuste = $salario + (30/100*$salario);
            echo "Seu salário reajustado é ".$reajuste;
        }
    }

?>