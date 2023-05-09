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
          <a href="{{ url('novo') }}" class="w-min px-4 py-2 bg-yellow-500">novo bolo</a>
        </nav>
      </header>
      <article class="text-2xl space-y-5">
        @forelse ($bolos as $bolo)
        <div class="w-full flex items-center justify-between">
          <div class="space-y-2">
            <h2 class="text-3xl font-bold">{{ $bolo->nome }}</h2>
            <ul class="list-disc ml-8">
              <li>{{ $bolo->ingrediente }}</li>
            </ul>
            <p>R${{ $bolo->preco }}</p>
            <a href="{{ url('delete/' . $bolo->id) }}" class="underline text-[14pt] text-red-600" onclick="return byeBolo()">
              deletar bolo.,,
            </a>
          </div>
          <img src="{{ $bolo->imagem }}" class="w-60 h-40 object-cover">
        </div>
        @empty
        <p>Você não tem bolo ... :c</p>
        @endforelse
      </article>
    </section>
  </main>
  <script>
    function byeBolo() {
      return confirm('tchau bolo????....');
    }
  </script>
</body>

</html>
