<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>exemplo de php</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //ajusta a hora atual de acordo com o país
        echo "Hoje é dia " . date("d/M/Y"); // ". date()" é uma função e dentro dela nós declaramos o que desejamos ver. d = dia num; M = Mes; Y = ano e D = dia week.
        echo " e a hora atual é " . date("G:i:s T"); //usa-se a função também para declarar a hora, onde: G = hora; i = minutos; s = segundos.
    ?>
</body>
</html>