<?php
$texto = implode(";", $_POST) . PHP_EOL;
$fp = fopen("./meu_arquivo.txt", "a+");
fwrite($fp, $texto);
fclose($fp);