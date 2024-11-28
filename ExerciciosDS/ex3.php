<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Média</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="nota1" name="nota1" required>
        <br>
        <label for="numero">Digite outro número:</label>
        <input type="number" id="nota2" name="nota2" required>
        <br>
        <label for="numero">Digite outro número:</label>
        <input type="number" id="nota3" name="nota3" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $nota1 = $_POST["nota1"] ?? 0;
            $nota2 = $_POST["nota2"] ?? 0;
            $nota3 = $_POST["nota3"] ?? 0;
            $media = ($nota1 + $nota2 + $nota3) / 3;

            if($media >= 6){
                echo "<p> <strong>Aluno aprovado! Média: $media  </strong> </p>";
            }
            else{
                echo "<p> <strong>Aluno reprovado! Média: $media  </strong> </p>";
            }

           
        }
        ?>
    </section>
</body>

</html>
