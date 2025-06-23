<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        Valor: <input name="num1" type="text"><br>
        <input type="submit" name="operacao">
    </form>    
    <br>
    <?php
    
        $num1 = $_POST['num1'];
        $op = $_POST['operacao'];

        if (!empty($op)) {
            $resultado_parcela = ( $num1 * 1.16 ) / 10;
            $resultado_total = ( $num1 * 1.16 );

            echo "O valor parcelado é igual a: $resultado_parcela<br>";
            echo "O valor total é igual a: $resultado_total";
        }
    ?>
</body>
</html>