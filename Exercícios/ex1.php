<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        KM: <input name="num1" type="text"><br>
        Litros: <input name="num2" type="text"><br>
        <input type="submit" name="operacao">
    </form>
    <br>
    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operacao'];

    if (!empty($op)) {
        $resultado = $num1 / $num2;
    
        echo "O resultado da operacao é igual a: $resultado";
    }
    ?>
</body>
</html>