<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Desafio Um</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <p>
            <?php
            $num = $_GET["numero"];
            $suc = $num + 1;
            $ant = $num - 1;
            echo "O número que você digitou é: $num";
            echo "<p> O seu sucessor é: $suc";
            echo "<p> O seu antecessor é: $ant"

            ?>
        </p>
        <button onclick="javascript:window.location.href='des001.html'">Voltar</button>
    </main>
</body>

</html>