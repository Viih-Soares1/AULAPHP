<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar sequencia</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número fatorial:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero = $_POST["numero"] ?? 0;
            $total = 0;
            for ($i=$numero - 1; $i > 0; $i--) { 
                echo "$numero X $i = ".($numero * $i . "<br>");
                $total += $numero * $i;
            }
            print("Total: $total");
        }
        ?>
    </section>
</body>

</html>
