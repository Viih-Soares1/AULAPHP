<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário reajuste</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite o salário:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero = $_POST["numero"] ?? 0;

            // Verifica se o número é negativo ou positivo
            if ($numero <= 300 && $numero > 0) {
                echo "<p>O salário reajustado <strong> é: ".  ($numero + ($numero * 0.50))."</strong>.</p>";
            } 
            else if ($numero > 300){
                echo "<p>O salário reajustado <strong> é: ".  ($numero + ($numero * 0.30))."</strong>.</p>";
            }
        
            else {
                 echo "<p>O salário reajustado <strong> é: $numero </strong>.</p>";
            }
        }
        ?>
    </section>
</body>

</html>
