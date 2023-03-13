<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli('localhost', 'root', '', 'server');
$stmt = $mysqli->prepare('SELECT * FROM user WHERE username=?');
$stmt->bind_param('s', $username);
$stmt->execute();

if ($result = $stmt->get_result()) {
  if ($row = $result->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['fullname'] = $row['fullname'];
      header('Location: home.php');
      exit;
    }
    session_unset();
  }
  header('Location: login.php?msg=LOGIN_ERROR');
  exit;
}
header('Location: login.php?msg=ERROR');
exit;
