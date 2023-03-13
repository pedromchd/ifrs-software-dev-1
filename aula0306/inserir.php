<?php
if (isset($_POST)) {
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];

  $mysqli = new mysqli('localhost', 'root', '', 'loja');
  $stmt = $mysqli->prepare('INSERT INTO lista (nome, preco, quantidade) VALUES (?, ?, ?)');
  $stmt->bind_param('sdi', $nome, $preco, $quantidade);
  $stmt->execute();

  $code = $stmt ? 1 : 0;

  header("Location: index.php?code=$code");
}
