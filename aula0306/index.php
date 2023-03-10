<!DOCTYPE html>
<html>

<body>
  <form action="inserir.php" method="post">
    <label>Nome: <input type="text" name="nome"></label>
    <label>Preço: <input type="number" name="preco" step="0.01"></label>
    <label>Quantidade: <input type="number" name="quantidade"></label>
    <button type="submit">Enviar</button>
  </form>
  <a href="mostrar.php"><button>Mostar lista</button></a>

  <?php
  if (isset($_GET['code'])) {
    if ($_GET['code']) {
      echo 'Dados inseridos com sucesso!';
    } else {
      echo 'Erro ao inserir dados!';
    }
  }
  ?>
</body>

</html>