<?php
$fp = fopen("./meu_arquivo.txt", "r");
echo "<table>";
while (($line = $fgets($fp)) !== false) {
    echo "<tr>";
    while ($column = explode(";", $line)) {
        echo "<td>" .  . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>