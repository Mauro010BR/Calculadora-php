<?php
    include ("header.php");
    ?>

<?php

    $num1 = $_GET["numero1"];
    $num2 = $_GET["numero2"];
    $operacao = $_GET["operacao"];

    if($operacao == "somar"){
        $resultado = $num1 + $num2;
        echo "<h1> O resultado da soma de $num1 e $num2 é: $resultado </h1>";
    }elseif($operacao =="subtrair"){
        $resultado = $num1 - $num2;
        echo "<h1> O resultado da subtração de $num1 e $num2 é: $resultado </h1>";
    }elseif($operacao == "dividir"){
        $resultado = $num1 / $num2;
        echo "<h1> O resultado da divisão de $num1 e $num2 é: $resultado </h1>";
    }elseif($operacao =="multiplicar"){
        $resultado = $num1 * $num2;
        echo "<h1> O resultado da multiplicação de $num1 e $num2 é: $resultado </h1>";
    }

    ?>
    <center>
    <br><br><br><br>
    <?php
     require("footer.php")
    ?>