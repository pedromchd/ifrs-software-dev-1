<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="create.php" method="post">
        <label>Nome: <input type="text" name="nome"></label>
        <label>Preço: <input type="number" name="preco" step="0.01"></label>
        <label>Quantidade: <input type="number" name="quantidade"></label>
        <button type="submit">Enviar</button>
    </form>
    <a href="read.php"><button>Mostar lista</button></a>
</body>
</html>

<?php
if (isset($_GET['code'])) {
    if ($_GET['code']) {
        echo 'Dados inseridos com sucesso!';
    } else {
        echo 'Erro ao inserir dados!';
    }
}