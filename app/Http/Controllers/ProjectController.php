<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages/projects');
    }

    public function show($id)
    {
        return view('pages/project-detail', compact('id'));
    }
}
