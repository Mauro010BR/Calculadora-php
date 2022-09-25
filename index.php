<?php
    include ("header.php");
    ?>

<body>
    <form action ="calculo.php" method="get">
        <label for="numero1">Numero 1: </label>
        <input type="number" name="numero1" id="numero1">

        <label for="numero2">Numero 2: </label>
        <input type="number" name="numero2" id="numero2">

        <select name="operacao" id="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="dividir">Dividir</option>
            <option value="multiplicar">Multiplicar</option>
        </select>       
        <input type="submit" value="Calcular">
    </form>
<br><br><br><br>
<center>
    <?php
     require("footer.php")
    ?>
</body>
