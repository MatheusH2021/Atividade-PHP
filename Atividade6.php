<form>
    <input type="text" name="nt1" placeholder="Digite a primeira nota">
    <input type="text" name="nt2" placeholder="Digite a segunda nota:">
    <input type="text" name="nt3" placeholder="Digite a terceira nota:">
    <input type="text" name="nt4" placeholder="Digite a quarta nota:">
    <button>Enviar</button>
</form>
<?php

    if(isset($_GET['nt1']) && isset($_GET['nt2']) && isset($_GET['nt3']) && isset($_GET['nt4'])){
        
        $nota1 = $_GET['nt1'];
        $nota2 = $_GET['nt2'];
        $nota3 = $_GET['nt3'];
        $nota4 = $_GET['nt4'];

        $media = (doubleval($nota1) + doubleval($nota2) + doubleval($nota3) + doubleval($nota4))/4;
        
        if ($media >= 7){
            echo "Sua média é ".$media." parabéns, você foi aprovado!";
        }else{
            echo "Sua média é ".$media." infelizmente voçê foi reprovado!";
        }
    }
?>