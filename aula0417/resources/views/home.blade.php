<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Welcome, {{ $uname }}</h1>
  <p>Your email is: {{ $email }}</p>
  <p>Your games are:</p>
  <table>
    <tr>
      <td>Name</td>
      <td>Year</td>
      <td>System</td>
      <td>Developer</td>
    </tr>
    @forelse ($myGames as $game)
      <tr>
        <td>{{ $game->name }}</td>
        <td>{{ $game->year }}</td>
        <td>{{ $game->system }}</td>
        <td>{{ $game->developer }}</td>
      </tr>
    @empty
      <tr>
        <td>There is no games to show.</td>
      </tr>
    @endforelse
  </table>
</body>

</html>
