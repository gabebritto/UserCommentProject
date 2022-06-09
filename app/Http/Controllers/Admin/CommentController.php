<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $model;
    protected $user;

    public function __construct(Comment $comment, User $user)
    {
        $this->model = $comment;
        $this->user = $user;
    }

    public function index($userId)
    {
        if (!$user = $this->user->find($userId))
        {
            return redirect()->back();
        }

        $comments = $user->comments()->get();
        return view('users.comments.index', compact('user', 'comments'));
    }
    
    public function create($userId)
    {
        if(!$user = $this->user->find($userId))
        {
            return redirect()->back();
        }

        return view('users.comments.create', compact('user'));
    }

    public function store()
    {

    }
}
