<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" class="css">
    <title>Document</title>
</head>
<body>
    <?php         
        $segundos = $_GET["segundos"] ?? 0;
           
    ?>
    <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
        <label for="segundos" >Quantos de segundos a serem calculados</label>
        <input type="number" name="segundos" id="idsegundos">
        <input type="submit" value="Calcular">
    </form>
    <section>
        
    <?php
                      
        if($segundos > 0){
            echo "Analisando o valor que você digitou <strong> $segundos segundos </strong> equivalem a um total de <br>"; 
            $semanas = intdiv($segundos , 604800);
            $dias = intdiv(($segundos % 604800), 86400);
            $horas = intdiv(($segundos % 86400), 3600);
            $minutos = intdiv(($segundos % 3600), 60);
            $segundos = intdiv(($segundos % 60), 1 );  
            echo "<p> Semanas: $semanas";
            echo "<p> Dias:  $dias";
            echo "<p> Horas: $horas";
            echo "<p> Minutos: $minutos ";
            echo "<p> Segundos: $segundos";
        }
        else {
            echo "Insira um valor de segundos acima de 0";
        }
        
    ?>
    </section>
</body>
</html>