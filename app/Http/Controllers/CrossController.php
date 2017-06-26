<?php

namespace App\Http\Controllers;

use App\Cross;
use App\TypeCross;
use Illuminate\Http\Request;

class CrossController extends Controller
{
    public function index()
    {
        $Crosses = TypeCross::all();
        $blogs = Cross::all();
        return view('pages.cross.index',compact('blogs','Crosses'));
    }


    public function show()
    {
        $blogs = Cross::all();
        return view('pages.cross.show',compact('blogs'));
    }

    public function create()
    {
        return view ('pages.cross.create');
    }

    public function store(Request $request)
    {
        Cross::create(request()->all());
        return redirect('admin/cross');
    }

    public function edit($id)
    {
        $blogs = Cross::findOrFail($id);
        return view('pages.cross.edit',compact('blogs'));
    }

    public function update(Request $request,$id)
    {
        $blogs = Cross::findOrFail($id);
        $blogs->update(request()->all());
        return redirect('admin/cross');
    }

    public function destroy($id)
    {
        $blogs = Cross::findOrFail($id);
        $blogs->delete();
        return redirect('admin/cross');
    }
}
