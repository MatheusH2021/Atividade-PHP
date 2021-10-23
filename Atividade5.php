<form>
    <label>Informe um A:</label>
    <input type="text" name="A">
    ]<label>Informe um B:</label>
    <input type="text" name="B">
    <button>Enviar</button>
</form>

<?php

    if(isset($_GET['A']) && isset($_GET['B'])){
        $A = $_GET['A'];
        $B = $_GET['B'];
        if ($A < $B){
            echo $A." ".$B;
        }else{
            echo $B." ".$A;
        }
    }

?>