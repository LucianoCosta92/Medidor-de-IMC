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
            echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
            if($resultado <= 18.5){
                echo "<center>(Abaixo do peso)</center><br>";
            } elseif($resultado >= 18.6 and $resultado <= 24.9){
                echo "<center>(Peso ideal)</center><br>";
            } elseif($resultado >= 25.0 and $resultado <= 29.9){
                echo "<center>(Levemente acima do peso)</center><br>";
            } elseif($resultado >= 30.0 and $resultado <= 34.9){
                echo "<center>(Obesidade grau I)</center><br>";
            } elseif($resultado >= 35.0 and $resultado <= 39.9){
                echo "<center>(Obesidade grau II - severa)</center><br>";
            } else{
                echo "<center>(Obesidade III - mórbida)</center><br>";
            }
        ?>

        <img src="image/tabela.png" class="minha-imagem" alt="imagem">

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>