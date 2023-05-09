<?php

namespace App\Http\Controllers;

use App\Models\Bolo;
use Illuminate\Http\Request;

class MyController extends Controller
{
  public function geraHome() {
    $bolos = Bolo::all();
    return view('home', ['bolos' => $bolos]);
  }

  public function geraNovo() {
    return view('novo');
  }

  public function insereBolo(Request $request) {
    $data = $request->all();
    $bolo = new Bolo;
    $bolo->nome = $data['nome'];
    $bolo->ingrediente = $data['ingrediente'];
    $bolo->preco = $data['preco'];
    $bolo->imagem = $data['imagem'];
    $bolo->save();
    return redirect('/');
  }

  public function byeBolo($id) {
    Bolo::find($id)->delete();
    return redirect('/');
  }
}
