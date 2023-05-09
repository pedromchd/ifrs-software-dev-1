<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bolos</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main class="bg-yellow-100 min-h-screen grid place-items-center">
    <section class="bg-yellow-300 w-[60vw] h-full p-10 font-serif">
      <header class="mb-10">
        <h1 class="text-5xl font-bold">Bolo, bolo!! Muito bOLO !!!!</h1>
        <nav class="mt-3">
          <a href="{{ url('/') }}" class="w-min px-4 py-2 bg-yellow-500">cancelar</a>
        </nav>
      </header>
      <article class="text-2xl space-y-5">
        <form action="{{ url('insert') }}" method="post">
          <fieldset class="flex flex-col gap-2">
            @csrf
            <label for="nome">Nome do bolo:</label>
            <input type="text" name="nome" id="nome">
            <label for="ingrediente">Ingredientes do bolo;</label>
            <textarea name="ingrediente" id="ingrediente" cols="30" rows="2"></textarea>
            <label for="preco">Preço do bolo:</label>
            <input type="number" name="preco" id="preco">
            <label for="imagem">Imagem do bolo</label>
            <input type="url" name="imagem" id="imagem">
            <input type="submit" value="adicionar!" class="py-3 w-48 bg-yellow-500 cursor-pointer">
          </fieldset>
        </form>
      </article>
    </section>
  </main>
</body>

</html>
