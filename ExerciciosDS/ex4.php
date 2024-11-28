<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Mês</title>
</head>

<body>
    <form action="" method="POST">
        <label for="numero">Digite um número entre 1 e 12:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Enviar">
    </form>

    <section>
        <h2>Resultado</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Pega o valor enviado pelo formulário 
            $numero = $_POST["numero"] ?? 0;
            $array = [1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 
            'Junho', 'Julho', 'Agosto', 'Setembro','Outubro', 'Novembro', 'Dezembro'];
    

            switch ($numero) {
                case 1:
                    echo ($array[$numero]);
                    break;
                case 2:
                    echo($array[$numero]);
                    break;
                case 3:
                    echo($array[$numero]);
                    break;
                case 4:
                    echo($array[$numero]);
                    break;
                case 5:
                    echo($array[$numero]);
                    break;
                case 6:
                    echo ($array[$numero]);
                    break;
                case 7:
                    echo ($array[$numero]);
                    break;
                case 8:
                    echo ($array[$numero]);
                    break;
                case 9:
                    echo ($array[$numero]);
                    break;
                case 10:
                    echo ($array[$numero]);
                    break;
                case 11:
                    echo ($array[$numero]);
                    break;
                case 12:
                    echo ($array[$numero]);
                    break;
                default:
                    echo ("O numero digitado é fora do padrão");
                    break;
            }
            
        }
        ?>
    </section>
</body>

</html>
