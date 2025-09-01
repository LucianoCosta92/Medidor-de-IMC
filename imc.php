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
            if($resultado <= 18.5){
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Abaixo do peso)</center>";
            } elseif($resultado >= 18.6 and $resultado <= 24.9){
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Peso ideal)</center>";
            } elseif($resultado >= 25.0 and $resultado <= 29.9){
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Levemente acima do peso)</center>";
            } elseif($resultado >= 30.0 and $resultado <= 34.9){
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Obesidade grau I)</center>";
            } elseif($resultado >= 35.0 and $resultado <= 39.9){
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Obesidade grau II - severa)</center>";
            } else{
                echo "<center>Seu IMC é: <strong>" . number_format($resultado, 1, '.', '') . "</strong></center><br>";
                echo "<center>(Obesidade III - mórbida)</center>";
            }
            echo "<br>";
        ?>

        <img src="image/tabela.png" class="minha-imagem" alt="imagem">

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>