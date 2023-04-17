<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class MyController extends Controller
{
  public function geraWelcome() {
    return view('welcome');
  }

  public function geraHome(Request $request) {
    $data = $request->all();
    $games = $this->getGames();
    return view('home', [
      'uname' => $data['username'],
      'email' => $data['email'],
      'myGames' => $games
    ]);
  }

  public function getGames() {
    $games = Games::all();
    return $games;
  }
}
