<?php
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $num1=floatval($_POST['num1']);
    $num2=floatval($_POST['num2']);
    $op=$_POST['op'];
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #e8f5e9; /* Verde pastel */
                color: #333;
            }
            h1 {
                color: #388e3c;
            }
            p {
                font-size: 1.2em;
            }
            a {
                text-decoration: none;
                color: #388e3c;
                font-weight: bold;
            }
            a:hover {
                color: #2e7d32;
            }
        </style>
    </head>
    <body>
        <h1>Resultado da Operação</h1>";

    if($op==="add"){
        echo "Resultado da operação⬇️ <br>".$num1." + ".$num2." = ".($num1+$num2);
        
    }
    if($op==="sub"){
        echo "Resultado da operação⬇️ <br>".$num1." - ".$num2." = ".($num1-$num2);
        
    }
    if($op==="multiplicacao"){
        echo "Resultado da operação⬇️ <br>".$num1." * ".$num2." = ".($num1*$num2);
        
    }
    if($op==="divisao"){
        echo "Resultado da operação⬇️ <br>".$num1." / ".$num2." = ".($num1/$num2);
        
    }
 }
    ?>

    