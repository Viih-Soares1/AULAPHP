<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>  Dados do Servidor </h1>
    <?php 
            date_default_timezone_set("America/Sao_Paulo");
           $nome = "Vinicius";
           $sobrenome = "Gonçalves";
           $sexo = "Masculino";
           $idade = 25;
           // "" interpreta o que está nas variaveis
           echo ("Bem vindo $nome \t \"VIIH\" $sobrenome ");   
           echo ("A sua idade é $idade ");
           // '' para colocar o que realmente está escrito na echo
           echo ('<b> <br> Bem vindo $nome $sobrenome ');   
           echo ('A sua idade é $idade ');

           const ESTADO = "SP";
           echo " <br> Moro em ESTADO";
           echo " <br> Moro em " . ESTADO;
           echo "<br> estamos no ano de " . date("Y");
           echo "<br> estamos no ano de " . date('Y');
    ?>
</body>
</html>