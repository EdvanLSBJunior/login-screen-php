<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $name     = $_GET["name"]     ?? "Nome";
            $lastname = $_GET["lastName"] ?? "Sobrenome";
            echo "<p>E um prazer te conhecer, <strong>$name $lastname</strong>! Este e o meu site!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>