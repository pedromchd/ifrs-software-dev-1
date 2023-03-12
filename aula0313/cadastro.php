<?php

session_cache_expire(30);
session_start();

if (isset($_SESSION['usuario'])) {
  echo "Já registrado como $_SESSION[usuario].<br>";
} else
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $uname = trim($_POST['usuario']);
  $email = trim($_POST['email']);
  if ($uname && $email) {
    $_SESSION['usuario'] = $uname;
    $_SESSION['email'] = $email;
    echo 'Obrigado por se registrar!<br>';
    echo "Usuário: $uname.<br>";
    echo "Email $email.<br>";
  } else {
    exit('Por favor, preencha todos os campos corretamente.');
  }
} else {
  exit('Operação inválida.');
}
echo '<a href="logout.php"><button>Logout</button></a>';
