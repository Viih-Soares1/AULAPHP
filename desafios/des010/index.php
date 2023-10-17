<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" class="css">
    <title>Document</title>
</head>
<body>
    <main>
        <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
            <label for="Valor">Digite o Valor </label>
            <input type="number" name="valor" id="id valor">
            <label for="reajuste"> Porcentagem de Reajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" min="0" max="100" step="1" oninput="mudavalor()" id="reaj">
            <input type="submit" value="Calcular">  
            
        </form> 
        <section>
            <?php 
            $valor = $_GET["valor"] ?? 0;
            $reajuste = $_GET["reajuste"] ?? 0;
            $porcentagem = ($valor * $reajuste / 100 ) + $valor;
            echo "<p> O valor com o reajuste de $reajuste% é $porcentagem";
            ?>
        </section>  
        <script> 
            mudavalor();
            function mudavalor(){
                p.innerText = reaj.value;
            }
        </script>
    </main>
</body>
</html>