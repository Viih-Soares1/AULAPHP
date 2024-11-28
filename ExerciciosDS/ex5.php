<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Operacao</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <label for="numero">Digite outro número:</label>
        <input type="number" id="numero1" name="numero1" required>
        <select id="Operacao" name="Operacao">
            <option value="1">Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicação</option>
            <option value="4">Divisão</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero = $_POST["numero"] ?? 0;
            $numero1 = $_POST["numero1"] ?? 0;
            $opcao = $_POST["Operacao"];
            $resultado = 0;

            switch ($opcao) {
                case 1:
                    echo ("Soma:  ". $numero + $numero1);
                    break;
                case 2:
                    echo ("Subtração: " . ($numero - $numero1));
                    break;
                case 3:
                    echo("Multiplicação: " . ($numero * $numero1));
                    break;
                case 4:
                    echo("Divisão: " . ($numero / $numero1));
                    break;
                default:
                    echo("Erro");
                    break;
            }          
        }
        ?>
    </section>
</body>

</html>
