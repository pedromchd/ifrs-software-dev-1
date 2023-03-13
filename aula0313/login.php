<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen grid place-items-center">
  <main class="">
    <form action="authenticate.php" method="post">
      <label for="">Username: <input type="text" name="username" id=""></label>
      <label for="">Password: <input type="password" name="password" id=""></label>
      <input type="submit" value="Login">
      <a href="register.php"><input type="button" value="Register"></a>
    </form>
  </main>
</body>

</html>