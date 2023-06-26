<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso = $_POST['input-peso'];
    $altura = $_POST['input-altura'];
    $alturaMetros = $altura / 100;


    $imc = $peso / ($alturaMetros * $alturaMetros);
    

    header("Location: resultado.php?imc=" . urlencode($imc));
    
    
}?>
