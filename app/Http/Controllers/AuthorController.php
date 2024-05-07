<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class AuthorController extends Controller
{
    public function dashboard()
    {
        return view('Author.dashboard');
    }

    public function artikel()
    {
        $post = post::get();
        return view('Author.artikel', compact('post'));
    }
}
