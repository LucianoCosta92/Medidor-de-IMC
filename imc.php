<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];
            $resultado = $peso / ($altura * $altura);
            echo "<center>Seu IMC é: <strong>" . number_format($resultado, 2, '.', '') . "</strong></center><br>";
        ?>

        <img src="image/tabela.png" class="minha-imagem" alt="imagem">

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>