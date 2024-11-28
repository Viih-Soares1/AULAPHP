<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar cliente</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite o valor total da compra:</label>
        <input type="number" id="numero1" name="numero1" required>
        <select id="Operacao" name="Operacao">
            <option value="1">Funcionário</option>
            <option value="2">Cliente Vip</option>
            <option value="3">Cliente Comum</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero1 = $_POST["numero1"] ?? 0;
            $opcao = $_POST["Operacao"];
            $resultado = 0;

            switch ($opcao) {
                case 1:
                    echo ("Escolhido Funcionário.<br><strong> Total da compra com 10% de desconto:</strong>  ". $numero1 - ($numero1 * 0.10));
                    break;
                case 2:
                    echo ("Escolhido Cliente VIP. <br> <strong>Total da compra com 5% de desconto: </strong> ". $numero1 - ($numero1 * 0.05));
                    break;
                case 3:
                    echo ("Escolhido Cliente Comum.<br><strong> Total da compra: </strong> ". $numero1);
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
