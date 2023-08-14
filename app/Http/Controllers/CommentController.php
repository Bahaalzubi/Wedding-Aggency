<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comments::all();

        return view('admin.comments.index', compact('comments'));
    }
}
