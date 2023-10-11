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
        <h2> Calculando Sua idade </h2>
        <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
            <label for="idade"> Ano em que nasceu </label>
            <input type="number" name="nasceu" id="idnasceu">
            <label for="ano">Ano que quer saber quanto terá de idade</label>
            <input type="number" name="ano2" id="idano2">
            <input type="submit" value="Calcular idade">
        </form>
        <section>
            <h2>Resultado</h2>
            <?php
                $anonascimento = $_GET["nasceu"] ?? 0;
                $anofuturo = $_GET["ano2"] ?? 0;
                $idade = $anofuturo - $anonascimento;
                if($idade > 0):
                    echo "<p> Você terá $idade anos em $anofuturo !";
                else: 
                    echo "<p> Preencha os campos para ter o resultado!";
                endif;

            ?>    
    
        </section>
    </main>
</body>
</html>