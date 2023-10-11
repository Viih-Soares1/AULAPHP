<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">3
    <link rel="stylesheet" href="../style.css" class="css">
    <title>Document</title>
</head>
<body>
    <?php 
    $valor1 = $_GET["valor1"] ?? 0;
    $valor2 = $_GET["valor2"] ?? 0;
    $peso1 = $_GET["peso1"] ?? 0;
    $peso2 = $_GET["peso2"] ?? 0;    
    ?>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="valor1">Valor 1 </label>
        <input type="number" name="valor1" value="<?= $valor1?>">
        <label for="peso1">Peso 1</label>
        <input type="number" name="peso1" value="<?= $peso1 ?>">
        <label for="valor2"> Valor 2</label>
        <input type="number" name="valor2" value="<?= $valor2 ?>">
        <label for="peso2"> Peso 2</label>
        <input type="number" name="peso2" value="<?= $peso2 ?>">
        <input type="submit" value="Calcular">       

    </form>
    <section>    
    <h2>Resultado </h2>
    <?php 
    $peso = $peso1 + $peso2;
    $ponderada = (($peso1 * $valor1) + ( $peso2 * $valor2)) / $peso;
    $media = ($valor1 + $valor2) / 2;  

    echo " A média artimética é <strong> " . number_format($media,2 ) ."</strong> <br> A média ponderada com pesos $peso1 e $peso2 é <strong> " . number_format($ponderada,2 )   ."</strong> ";  
    
    ?>
   
       
    </section>
</body>
</html>