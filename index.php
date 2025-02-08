<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes - PHP</title>
</head>
<body>
    <h1>Variáveis e Constantes - PHP</h1>

    <?php 
        $nome = "Tiago"; //definição de variável com o '$' + nome da variável = valor da variável;
        $sobrenome = "Gregório";
        //
        //
        //
        $sobrenome = "Teles"; //caso declare outra variável com mesmo nome, porém outro valor, o valor a ser apresentado na mensagem será o último valor declarado, pois é uma VARIÁVEL
        const PAIS = "Brasil"; //o nome da constante não é declarado com o '$' 
        //
        //
        //const PAIS = "EUA"; (ao executar com essa constante, deu erro, pois já foi definida anteriormente e o valor de uma constante NÃO SE ALTERA)

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS; //echo escreve mensagem na tela, e você traz as variáveis para que seus valores completem a mensagem;
                                                                     //para chamar a constante na frase, basta após as aspas escrever . NOME DA CONSTANTE;
    ?>
</body>
</html>
