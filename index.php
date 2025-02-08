<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos das 7 regras</title>
</head>
<body>
    <h1>Exemplos das 7 regras</h1>
        <?php 
            $nome = "Tiago";
            $salario = 2500.75;

            //echo "É verdade que seu nome é $NOME ?"; -> este código da erro devida a 6° regra do case sensitive
            echo "É verdade que seu nome é $nome? ";
            echo "Seu salário é $salario ";

        ?>
</body>
</html>