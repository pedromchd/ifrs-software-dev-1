<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class MyController extends Controller
{
  public function geraWelcome()
  {
    return view('welcome');
  }

  public function getData()
  {
    $games = game::all();
    echo "
    <table>
      <tr>
        <td>Name</td>
        <td>Year</td>
        <td>System</td>
        <td>Developer</td>
      </tr>
    ";
    foreach ($games as $game) : ?>
      <tr>
        <td><?= $game->name ?></td>
        <td><?= $game->year ?></td>
        <td><?= $game->system ?></td>
        <td><?= $game->developer ?></td>
      </tr>
    <?php endforeach;
    echo "</table>";
  }

  public function geraMyHome(Request $request)
  {
    $data = $request->all();
    $this->getData();
    return view('myHomeView', ['mydata' => $data['email'], 'mypass' => $data['password']]);
  }
}
