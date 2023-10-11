<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../ex002/style.css">
</head>
<body>
    <header> <h1>Operadores Aritméticos em PHP </h1></header>
    <form>
    <h2> Ordem de Operação</h2>
    <p> () qualquer operação que estiver dentro dos parenteses </p>
    <p> ** -- Potência</p>
    <p> * - / - % -- Multiplicação, Divisao e resto da divisão</p>
    <p> + / - -- adição e subtração</p>
    </form>
    <form>
        <?php 
         $r = base_convert(110, 10, 2);
         echo "110 convertido em número binário é: $r";
         $hexa = base_convert(110, 10, 16);
         echo "<p> 110 convertido em hexadecimal é: $hexa";
         $octal = base_convert(110, 10, 8);
         echo "<p> 110 convertido em octal é: $octal";
         $raizq = 81 ** (1/2);
         echo "<p> a raiz quadrada de 81 é: $raizq";
         $raizc = 27 ** (1/3);
         echo "<p> a raiz cubica de 27 é: $raizc";
         $sen = sin(30);
         echo "<p> o seno de 30 é $sen";
         $cos = cos(30);
         echo "<p> o cosseno de 30 é $cos";
         $tang = tan(30);
         echo "<p> a tangente de 30 é $tang";
        $re = "2" + "2";
        echo "<p>$re";
        var_dump($re)
        
         
         ?>


    </form>
</body>
</html>