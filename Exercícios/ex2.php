<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        Comprimento: <input name="num1" type="text"><br>
        Largura: <input name="num2" type="text"><br>
        Altura: <input name="num3" type="text"><br>
        <input type="submit" name="operacao">
    </form>
    <br>
    <?php
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $op = $_POST['operacao'];

    if (!empty($op)) {
        $resultado = $num1 * $num2 * $num3;

        echo "O volume é igual a: $resultado";
    }
    ?>
</body>
</html>