<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Principal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    table {
      border: 1px solid black
    }
    td {
      border: 1px solid black;
      padding-inline: 0.5rem;
      padding-block: 0.25rem;
    }
  </style>
</head>

<body>
  <main class="h-screen flex flex-col items-center justify-center space-y-2 bg-slate-100">
    <section class="px-3 py-5 bg-orange-200 border border-black rounded-md">
      <table>
        <tr>
          <td>Nome</td>
          <td>Quantidade</td>
          <td>Preço</td>
        </tr>
        @forelse ($produtos as $produto)
          <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>{{ $produto->preco }}</td>
          </tr>
        @empty
          <p>Não há nenhum produto registrado</p>
        @endforelse
      </table>
    </section>
  </main>
</body>

</html>
