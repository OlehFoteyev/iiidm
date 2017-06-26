<?php

namespace App\Http\Controllers;

use App\FullColor;
use Illuminate\Http\Request;

class FullColorController extends Controller
{
    public function show()
    {
        $fullLines = FullColor::all();
        return view('pages.fullColor.show',compact('fullLines'));
    }

    public function create()
    {
        return view('pages.fullColor.create');
    }

    public function store(Request $request)
    {
        //Валидация введенных данных
        $this->validate(request(),[
            'Size' => 'required|min:1',
            'One' => 'required|min:1',
            'Two' => 'required|min:1',
            'Three' => 'required|min:1',
            'Four' => 'required|min:1',
            'Five' => 'required|min:1',
            'Six' => 'required|min:1',
            'Seven' => 'required|min:1',
            'Eight' => 'required|min:1',
            'Nine' => 'required|min:1',
            'Ten' => 'required|min:1',
            'Eleven' => 'required|min:1',
            'Twelve' => 'required|min:1',
            'Thirteen' => 'required|min:1',
            'Fourteen' => 'required|min:1',
            'Fifteen' => 'required|min:1',
            'Sixteen' => 'required|min:1',
        ]);

        FullColor::create(request()->all());
        return redirect('admin/fullColor');
    }

    public function edit($id){
        $fullLines = FullColor::findOrFail($id);
        return view('pages.fullColor.edit',compact('fullLines'));
    }

    public function update(Request $request,$id)
    {
        //Валидация введенных данных
        $this->validate(request(),[
            'Size' => 'required|min:1',
            'One' => 'required|min:1',
            'Two' => 'required|min:1',
            'Three' => 'required|min:1',
            'Four' => 'required|min:1',
            'Five' => 'required|min:1',
            'Six' => 'required|min:1',
            'Seven' => 'required|min:1',
            'Eight' => 'required|min:1',
            'Nine' => 'required|min:1',
            'Ten' => 'required|min:1',
            'Eleven' => 'required|min:1',
            'Twelve' => 'required|min:1',
            'Thirteen' => 'required|min:1',
            'Fourteen' => 'required|min:1',
            'Fifteen' => 'required|min:1',
            'Sixteen' => 'required|min:1',
        ]);

        $fullLines = FullColor::findOrFail($id);
        $fullLines->update(request()->all());
        return redirect('admin/fullColor');
    }

    public function destroy($id)
    {
        $fullLines = FullColor::findOrFail($id);
        $fullLines->delete();
        return redirect('admin/fullColor');
    }
}
