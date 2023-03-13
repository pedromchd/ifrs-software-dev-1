<!DOCTYPE html>
<html>

<style>
  table,
  th,
  td {
    border: 1px solid #000;
  }
</style>

<body>
  <table>
    <tr>
      <th>Nº</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Quantidade</th>
    </tr>

    <?php
    $comecapor = '%';
    $primeiros = 1000;
    if (isset($_GET['comecapor']) && $_GET['comecapor']) {
      $comecapor = "$_GET[comecapor]%";
    }
    if (isset($_GET['primeiros']) && $_GET['primeiros']) {
      $primeiros = $_GET['primeiros'];
    }

    $mysqli = new mysqli('localhost', 'root', '', 'loja');
    $stmt = $mysqli->prepare('SELECT * FROM lista WHERE nome LIKE ? LIMIT ?');
    $stmt->bind_param('si', $comecapor, $primeiros);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      foreach ($row as $key => $value) {
        echo "<td>$value</td>";
      }
      echo '</tr>';
    }
    ?>
  </table>

  <form action="mostrar.php" method="get">
    <label>Começa por: <input type="text" name="comecapor"></label>
    <label>Primeiros: <input type="number" name="primeiros"></label>
    <button type="submit">Enviar</button>
  </form>
  <a href="/"><button>Voltar</button></a>
</body>

</html>