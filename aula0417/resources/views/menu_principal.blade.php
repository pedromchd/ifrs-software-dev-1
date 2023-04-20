<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Principal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main class="h-screen flex flex-col items-center justify-center space-y-2 bg-slate-100">
    <a href="{{ url('insert') }}">
      <button class="w-48 py-1 bg-green-500 border border-black rounded-md text-xl">Insert product</button>
    </a>
    <a href="{{ url('view') }}">
      <button class="w-48 py-1 bg-yellow-400 border border-black rounded-md text-xl">View products</button>
    </a>
  </main>
</body>

</html>
