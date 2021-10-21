<form>
    <input type="text" name="A" placeholder="Digite o valor A">
    <input type="text" name="B" placeholder="Digite o valor B">
    <input type="text" name="C" placeholder="Digite o valor C">
    <input type="text" name="D" placeholder="Digite o valor D">
    <button>Enviar</button>
</form>
<?php

    if(isset($_GET['A']) and isset($_GET['B']) and isset($_GET['C']) and isset($_GET['D'])){
        
        $A = $_GET['A'];
        $B = $_GET['B'];
        $C = $_GET['C'];
        $D = $_GET['D'];

        $soma = intval($A) + intval($C);
        $mult = intval($B) * intval($D);
        
        if ($soma > $mult){
            echo "A soma de ".$A." + ".$B." é maior que a multiplicação de ".$B." * ".$D;
        }elseif ($soma < $mult){
            echo "A soma de ".$A." + ".$B." é menor que a multiplicação de ".$B." * ".$D;
        }elseif ($soma == $mult){
            echo "A soma de ".$A." + ".$B." é igual a multiplicação de ".$B." * ".$D;
        }
    }
?>