<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class MyController extends Controller
{
  public function geraMenuPrincipal() {
    return view('menu_principal');
  }

  public function geraFormulario() {
    return view('formulario');
  }

  public function insereProduto(Request $request) {
    $data = $request->all();
    $produto = new Produtos;
    $produto->nome = $data['nome'];
    $produto->quantidade = $data['quantidade'];
    $produto->preco = $data['preco'];
    $produto->save();
    return redirect('/');
  }

  public function getProdutos() {
    $produtos = Produtos::all();
    return $produtos;
  }

  public function geraApresentacaoDados() {
    $produtos = $this->getProdutos();
    return view('apresentacao_dados', ['produtos' => $produtos]);
  }
}
