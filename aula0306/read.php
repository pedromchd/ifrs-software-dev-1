<?php
$mysqli = new mysqli('localhost', 'root', 'mysql', 'loja');
$stmt = $mysqli -> prepare('SELECT * FROM lista');
$stmt -> execute();
$result = $stmt -> get_result();

echo '<table>';
while ($row = $result -> fetchArray(MYSQLI_ASSOC)) {
    echo '<tr>';
    foreach ($row as $key => $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';