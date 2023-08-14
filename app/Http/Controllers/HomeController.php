<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $comments = Comments::all();
        
        return view('index', compact('comments'));
    }
}
