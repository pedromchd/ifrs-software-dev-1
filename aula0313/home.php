<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <?php
  session_start();

  echo "<h1>Hello $_SESSION[fullname]!</h1>"
  ?>

  <a href="logout.php"><button>Logout</button></a>
</body>

</html>