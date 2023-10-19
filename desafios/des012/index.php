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
        <h2> Caixa Eletrônico </h2>
        <?php
            $dinheiro = $_GET["dinheiro"] ?? 0;
            $resto = 0;
            $cem = 0;
            $cinquenta = 0;
            $vinte = 0;
            $dez = 0;
            $cinco = 0;
            $dois = 0;
            $um = 0;
        ?>
        <form method="get" action="<?= $_SERVER['PHP_SELF']; ?>">
            <label for="dinehiro">Digite a quantidade que deseja sacar</label>  
            <input type="number" name="dinheiro" id="iddinheiro">
            <input type="submit" value="Sacar">
        </form>
        <small>Notas disponíveis 100$ 50$ 10$ 5%</small>
    </main>
    <section>
        <?php 
            if($dinheiro > 0){
                echo "O Valor Digitado foi <strong> " . '$' . $dinheiro . " </strong> <br>";
                $resto = $dinheiro;
                $cem = (int)($resto / 100);
                $resto %= 100;
                $cinquenta = (int)( $resto / 50);
                $resto %= 50;
                $vinte = floor($resto / 20);
                $resto %= 20;
                $dez = (int)( $resto / 10);
                $resto %= 10;
                $cinco = (int)( $resto / 5);
                $resto %= 5;
                $dois = (int)( $resto / 2);
                $resto %= 2;
                $um = (int)( $resto /1);
                $resto %= 1;
                echo "Notas de 100: $cem <br>" ;
                echo "Notas de 50: $cinquenta <br>";
                echo "Notas de 20: $vinte <br>";
                echo "Notas de 10: $dez <br>";            
                echo "Notas de 5: $cinco <br>";
                echo "Notas de 2: $dois <br>";
                echo "Notas de 2: $um <br>";
            }
        
        ?>
        </section>
</body>
</html>