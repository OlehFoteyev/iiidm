<?php

namespace App\Http\Controllers;

use App\TypeCross;
use Illuminate\Http\Request;

class TypeCrossController extends Controller
{
    public function show()
    {
        $typeCrosses = TypeCross::all();
        return view('pages.typeCross.show',compact('typeCrosses'));
    }

    public function create()
    {
        return view('pages.typeCross.create');
    }

    public function store(Request $request)
    {
        TypeCross::create(request()->all());
        return redirect('admin/typeCross');
    }

    public function edit($id)
    {
        $typeCrosses = TypeCross::findOrFail($id);
        return view('pages.typeCross.edit',compact('typeCrosses'));
    }

    public function update(Request $request,$id)
    {
        $typeCrosses = TypeCross::findOrFail($id);
        $typeCrosses->update(request()->all());
        return redirect('admin/typeCross');
    }

    public function destroy($id)
    {
        $typeCrosses = TypeCross::findOrFail($id);
        $typeCrosses->delete();
        return redirect('admin/typeCross');
    }
}
