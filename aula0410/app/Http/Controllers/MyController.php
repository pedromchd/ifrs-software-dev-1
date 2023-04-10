<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
  public function geraWelcome()
  {
    return view('welcome');
  }

  public function geraMyHome(Request $request) {
    $data = $request->all();
    return view('myHomeView', ['mydata' => $data['email'], 'mypass' => $data['password']]);
  }
}
