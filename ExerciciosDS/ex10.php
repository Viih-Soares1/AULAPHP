<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar ordem numeral</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <label for="numero">Digite outro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero = $_POST["numero"] ?? 0;
            $numero1 = $_POST["numero1"] ?? 0;


            // Verifica se o primeiro número é maior que o segundo
            if ($numero > $numero1 ) {
               for ($numero1; $numero1 < $numero; $numero1++) { 
                    echo("$numero1  ");
               }
            } 
            else if($numero1 > $numero) {
                for ($numero; $numero < $numero1; $numero++) { 
                     echo("$numero  ");
                }
            }
            else {
                echo ("ERRO");
            }
        }
        ?>
    </section>
</body>

</html>
