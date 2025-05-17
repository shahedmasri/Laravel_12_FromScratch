<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
  {
      $categories = Category::all();
      $posts = Post::when(request('category_id'), function ($query) {
          $query->where('category_id', request('category_id'));
      })->latest()->get();
      // return view('home', ['categories' => $categories, 'posts' => $posts]);
      //This function can be used if the names of the variables are the same as array keys.
      return view('home', compact('categories', 'posts'));
  }
}
