<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <main>
    <form action="{{ url('home') }}" method="post">
      @csrf
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
      <input type="submit" value="Submit">
    </form>
  </main>
</body>

</html>
