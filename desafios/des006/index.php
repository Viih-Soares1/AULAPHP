<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" class="css">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salario"> Informe Seu Salário </label>
        <input type="number" name="salario">
        <p> Considerando o Salário Minímo de <b>R$1.380,00</b></p>
        <input type="submit">
    </form>
    <?php
    $salario = $_GET["salario"] ?? 0;
    $div = intdiv($salario, 1380);
    $resto = $salario % 1380;
    ?>


    <section>
        <h2> Resultado Final </h2>
        <p><?php
            echo "O salário digitado foi R$$salario, equivalem a $div salários minímos e $resto para completar"


            ?></p>

    </section>

</body>

</html>