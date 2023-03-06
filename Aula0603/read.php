<?php
$mysqli = new mysqli('localhost', 'root', 'mysqluser', 'loja');
$stmt = $mysqli -> prepare('SELECT * FROM lista');
$stmt -> execute();
$result = $stmt -> get_result();
while ($row = $result -> fetchArray(MYSQLI_ASSOC)) {
    foreach ($row as $key => $value) {
        
    }
}