<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Analisando  o número real</h1>
        <?php 
        $num = $_GET["numero"] ?? 0;
        $inteira = (int) $num;
        $frac = $num - $inteira; 
        echo "Analisando o número <strong> ".$num ."</strong> ";
        echo "<ul> <li> A parte inteira do número é <strong>$inteira</strong>";
        echo" <li> A parte fracionária é <strong>$frac</strong> </li></ul>"  
          
        
        ?>
        <button onclick="javascript:window.location.href='des004.html'">Voltar</button>


       
    </main>
</body>
</html>