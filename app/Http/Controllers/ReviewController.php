<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{



    public function index()
    {
        $comments = Comment::latest()
        ->paginate(9);
        $blogs = Review::all();
        return view('pages.review.index',compact('blogs','comments'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
           'comment' => 'required',
           'phone' => 'required',
        ]);

        Comment::create([
            'comment'=>request('comment'),
            'phone'=>request('phone'),
            'user_id'=> auth()->user()->id,
            ]);

        return redirect('review');
        }

    public function show()
    {
        $blogs = Review::all();
        return view('pages.review.show',compact('blogs'));
    }

    public function edit($id)
    {
        $blogs = Review::findOrFail($id);
        return view('pages.review.edit',compact('blogs'));
    }

    public function update(Request $request,$id)
    {
        //Валидацию введенных данных
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        $blogs = Review::findOrFail($id);
        $blogs->update(request()->all());

        return redirect('admin/review');
    }
}
