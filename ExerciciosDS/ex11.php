<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar caracteres</title>
</head>

<body>
    <form action="" method="POST">
        <label for="nome">Digite seu nome</label>
        <input type="text" id="nome" name="nome" required>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário
            $nome = $_POST["nome"] ?? "";
            $contador = 0;
            if(strlen($nome > 0)){
                echo("Nome: $nome <br>");
                echo(strlen($nome). " Caracteres. <br>");
                $contador = strlen($nome);
                for($i = 0; $i <= $contador; $i++){
                    echo ("$i  ");
                }
            } 
            else{
                echo ("O nome informado está vazio");
            }
        }
        ?>
    </section>
</body>

</html>
