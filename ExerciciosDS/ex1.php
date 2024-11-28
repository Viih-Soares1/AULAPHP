<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
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
            if ($numero > 0) {
                echo "<p>O número <strong>$numero</strong> é <strong>Positivo</strong>.</p>";
            } 
            else if ($numero == 0){
                echo "<p>O número <strong>$numero</strong> é <strong> 0 </strong>.</p>";
            }
        
            else {
                echo "<p>O número <strong>$numero</strong> é <strong>Negativo</strong>.</p>";
            }
        }
        ?>
    </section>
</body>

</html>
