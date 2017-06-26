<?php

namespace App\Http\Controllers;

use App\Comment;
use Hamcrest\Core\CombinableMatcherTest;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function show()
    {
        $comments = Comment::all();
        return view('pages.comment.show',compact('comments'));
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect('admin/comments');
    }
}
