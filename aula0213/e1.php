<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<table>
  <tr>
    <th>Código</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
  </tr>

  <?php
  $fp = fopen("meu_arquivo.txt", "r");
  while (($line = fgets($fp)) !== false) {
    echo "<tr>";
    foreach (explode(";", $line) as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }
  ?>

</table>