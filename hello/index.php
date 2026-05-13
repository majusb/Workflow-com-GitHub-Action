<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php
        echo "<h1>Hello World!</h1>";

        date_default_timezone_set('America/Sao_Paulo');
        $nome = "Maria Julia";
        $data = date("d/m/Y");
        $hora = date("H:i:s");

        echo "<p>Olá, meu nome é <strong>$nome</strong>! Hoje é dia <strong>$data</strong> e a hora atual é <strong>$hora</strong>.</p>";
    ?>

    <hr>

    <p><a href="../">Voltar</a></p>
</body>
</html>