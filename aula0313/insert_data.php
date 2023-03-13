<?php
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = new mysqli('localhost', 'root', '', 'server');
$stmt = $mysqli->prepare('INSERT INTO user (email, fullname, username, password) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $email, $fullname, $username, $password);
$stmt->execute();

if ($stmt) {
  header('Location: login.php?msg=OK');
} else {
  header('Location: login.php?msg=ERROR');
}
