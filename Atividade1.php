<form>
<label>Insira um valor:</label>
<input type="text" name="valor">
<button>Enviar</button>
</form>
<?php

    if(isset($_GET['valor'])){
        $valor = $_GET['valor']??"";
        if($valor > 10){
            echo $valor." é maior que 10!";
        }else{
            echo $valor." é menor que 10!";
        }
}

?>

 