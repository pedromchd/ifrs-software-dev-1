<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main class="h-screen flex flex-col items-center justify-center bg-slate-100">
    <section class="px-3 py-5 bg-blue-200 border border-black rounded-md">
      <form action="{{ url('insert_data') }}" method="post">
        @csrf
        <article class="w-56 flex flex-col space-y-2">
          <label for="nome">Nome do produto:</label>
          <input type="text" name="nome" id="nome">
          <label for="quantidade">Quantidade:</label>
          <input type="number" name="quantidade" id="quantidade">
          <label for="preco">Preço:</label>
          <input type="number" name="preco" id="preco" step="0.01">
          <input type="submit" value="Submit" class="py-1 border border-black rounded-sm bg-blue-500 text-white">
        </article>
      </form>
    </section>
  </main>
</body>

</html>
