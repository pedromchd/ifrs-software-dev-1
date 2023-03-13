<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = new mysqli('localhost', 'root', '', 'server');
$stmt = $mysqli->prepare('SELECT * FROM user WHERE username=? AND password=?');
$stmt->bind_param('ss', $username, $password);
$stmt->execute();

if ($result = $stmt->get_result()) {
  if ($row = $result->fetch_assoc()) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    header('Location: home.php');
  } else {
    unset($_SESSION);
    header('Location: login.php?msg=LOGIN_ERROR');
  }
} else {
  header('Location: login.php?msg=ERROR');
}
