<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

  public function store(Request $request)
  {
      $params = $request->validate([
          'title' => 'required|max:10',
          'body' => 'required|max:10',
      ]);

      Post::create($params);

      return redirect()->route('top');
  }

}

}
