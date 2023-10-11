
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header> <h1> Exibindo o resultado </h1></header>
    <main> 
        <?php 
         $nome = $_GET["nome"]?? "sem nome";
         $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
         $idade = $_GET["idade"] ?? "sem idade";
         $email = $_GET["email"] ?? "sem email";
         $senha = $_GET["password"];
        
         echo "<p>  Bem vindo <strong>$nome $sobrenome</strong>, é um prazer te conhecer e seu cadastro foi feito";
        
        ?>
        <p><a href="javascript:history.go(-1)"> Voltar à página anterior </a></p>
    </main>
    
</body>
</html>