<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table,
    th,
    td {
      border: 1px solid #000;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Nº</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Quantidade</th>
    </tr>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'loja');
    $stmt = $mysqli->prepare('SELECT * FROM lista');
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo '<tr>';
      foreach ($row as $key => $value) {
        echo '<td>' . $value . '</td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>

</html>