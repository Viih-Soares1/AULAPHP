<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" class="css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        ?>
        <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="dividendo"> Dividendo </label>
            <input type="number"  min="0" name="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" min="1" name="divisor">
            <input type="submit" name="mod">
        </form>
       
            <?php               
                $div = intdiv($dividendo , $divisor);
                $mod = $dividendo % $divisor;         
            ?>

            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $mod ?></td>
                    <td><?= $div ?></td>
                </tr>
            </table>
           

    </main>
</body>

</html>