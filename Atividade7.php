<form>
    <label>Informe sua altura:</label>
    <input type="text" name="altura">
    <label>Sexo</label>
    <select name="sexo">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select>
    <button>Enviar</button>
</form>
<?php

function pesoMasc($alt){
    $pesoIdeal = (72.7 * $alt) - 58;
    echo "O peso ideal para você é ".$pesoIdeal;
}
function pesoFemin($alt){
    $pesoIdeal = (62.1 * $alt) - 44.7;
    echo "O peso ideal para você é ".$pesoIdeal;
}

if(isset($_GET['altura'])&& isset($_GET['sexo']))
    $altura = $_GET['altura'];
    $sexo = $_GET['sexo']??"";
    switch ($sexo){
        case 'masculino':
            pesoMasc($altura);
            break;
        case 'feminino':
            pesoFemin($altura);
            break;
    }
?>