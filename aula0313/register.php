<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen grid place-items-center">
  <main class="p-4 border border-black">
    <form class="space-y-2" action="insert_data.php" method="post">
      <label class="block" for="">Email:<br><input class="p-1 border-[1px] border-black focus:outline-none" type="text" name="email" id=""></label>
      <label class="block" for="">Full name:<br><input class="p-1 border-[1px] border-black focus:outline-none" type="text" name="fullname" id=""></label>
      <label class="block" for="">Username:<br><input class="p-1 border-[1px] border-black focus:outline-none" type="text" name="username" id=""></label>
      <label class="block" for="">Password:<br><input class="p-1 border-[1px] border-black focus:outline-none" type="password" name="password" id=""></label>
      <input class="py-1 px-2 border border-black cursor-pointer" type="submit" value="Register">
      <a href="login.php"><input class="py-1 px-2 border border-black cursor-pointer" type="button" value="Back"></a>
    </form>
  </main>
</body>

</html>