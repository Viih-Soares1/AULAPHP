<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../desafios/style.css" class="css">
    <title>SuperGlobais</title>
</head>

<body>
    <main>
        <h2> Testando GITHUB </h2>
        <h3> testando o GIT PULL e </h3>
        <pre>
            <?php
                setcookie("dia-da-semana" , "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["TESTE"] = "SUCESSO";
               
                echo "<h2> Superglobal GET</h2>";
                var_dump($_GET);
               
                echo "<h2> Superglobal POST</h2>";
                var_dump($_POST);
               
                echo "<h2> Superglobal REQUEST</h2>";
                var_dump($_REQUEST);
               
                echo "<h2>  Superglobal COOKIE </h2>";
                var_dump($_COOKIE);
               
                echo "<h2> Superglobal SESSION  </h2>";
                var_dump($_SESSION);
                
                echo "<h2> Superglobal ENV </h2>";
                var_dump($_ENV);
                // foreach (getenv() as $c => $v){
                //     echo "<br> $c -> $v";
                // }
                echo "<h2>  Superglobal SERVER </h2>";
                var_dump($_SERVER);

                echo" <h2>Superglobal GLOBALS</h2>";
                var_dump($GLOBALS)
            ?>
            </pre>
        </main>
</body>

</html>
