<?php

namespace App\Http\Controllers;

use App\Screen;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function index()
    {
        $blogs = Screen::all();
        return view('pages.screen.index',compact('blogs'));
    }

    public function show()
    {
        $blogs = Screen::all();
        return view('pages.screen.show',compact('blogs'));
    }

    public function edit($id)
    {
        $blogs = Screen::findOrFail($id);
        return view('pages.screen.edit',compact('blogs'));
    }

    public function  update(Request $request,$id)
    {
        $blogs = Screen::findOrFail($id);
        $blogs->update(request()->all());
        return redirect('admin/screen');
    }

    public function destroy($id)
    {
        $blogs = Screen::findOrFail($id);
        $blogs->delete();
        return redirect('admin.screen');
    }
}
