<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCommentFormRequest;
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

    public function index(Request $request ,$userId)
    {
        if (!$user = $this->user->find($userId))
        {
            return redirect()->back();
        }

        $comments = $user->comments()
        ->where('body', 'LIKE', "%$request->search%")
        ->get();
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

    public function store(StoreUpdateCommentFormRequest $request, $userId)
    {
        if(!$user = $this->user->find($userId))
        {
            return redirect()->back();
        }

        $user->comments()->create([
            'body' => $request->body,
            'visible' => isset($request->visible)
        ]);
        return redirect()->route('comments.index', ['id' => $userId]);
    }

    public function edit($userId, $id)
    {
        if(!$comment = $this->model->find($id))
        {
            return redirect()->back();
        }

        $user = $comment->user;

        return view('users.comments.edit', compact('comment', 'user'));
    }
    
    public function update(StoreUpdateCommentFormRequest $request, $id)
    {
        if(!$comment = $this->model->find($id))
            return redirect()->back();
        
        $comment->update([
            'body' => $request->body,
            'visible' =>isset($request->visible)
        ]);

        return redirect()->route('comments.index', ['id' => $comment->user_id]);
    }
}
