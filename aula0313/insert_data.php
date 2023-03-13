<?php
$email = trim($_POST['email']);
$fullname = trim($_POST['fullname']);
$username = trim($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($email && $fullname && $username && $password) {
    $mysqli = new mysqli('localhost', 'root', '', 'server');
    $stmt = $mysqli->prepare('INSERT INTO user (email, fullname, username, password) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $email, $fullname, $username, $password);
    $stmt->execute();
    if ($stmt) {
      header('Location: login.php?msg=OK');
      exit;
    }
  }
}
header('Location: login.php?msg=ERROR');
exit;
