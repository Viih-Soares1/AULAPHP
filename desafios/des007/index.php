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
        <label for="salario"> Informe Um número </label>
        <input type="number" name="num" value="<?= $num ?>">
        
        <input type="submit" value="Caucular Raizes">
    </form>
    <?php
    $num = $_GET["num"] ?? 0;
    $raizq = $num ** (1/2);
    $raizc = $num ** (1/3);
    ?>


    <section>
        <h2> Resultado Final </h2>
        <?php
            echo "<li>A Raiz quadrada é: " . number_format($raizq, 2, ",",".") ."</li> ";
            echo "<li>A Raiz cubica é: " . number_format($raizc, 2, ",",".") ."</li>";
            ?>

    </section>

</body>

</html>