<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
  {
      $categories = Category::all();
      return view('home', ['categories' => $categories]);
  }
}
