<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class MainController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view('index', compact('posts'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        if (is_null($category)) {
            abort('404');
        }
        return view('category', compact('category'));
    }

    public function post($id = null) {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }
    
}
