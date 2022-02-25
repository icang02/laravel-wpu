<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class HomeController extends Controller
{
  public function index()
  {
    return view('home', [
      'title' => 'Home',
      'active' => 'home',
    ]);
  }

  public function about()
  {
    return view('about', [
      'title' => 'About',
      'active' => 'about',
      'name' => 'Ilmi Faizan',
      'jurusan' => 'Teknik Informatika',
    ]);
  }
}
