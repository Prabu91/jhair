<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages/blog');
    }

    public function show($id)
    {
        return view('pages/blog-detail', compact('id'));
    }
}
