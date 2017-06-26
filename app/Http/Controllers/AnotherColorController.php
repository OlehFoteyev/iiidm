<?php

namespace App\Http\Controllers;

use App\AnotherColor;
use Illuminate\Http\Request;

class AnotherColorController extends Controller
{
    public function show()
    {
        $anotherLines = AnotherColor::all();
        return view('pages.anotherColor.show',compact('anotherLines'));
    }

    public function create()
    {
        return view('pages.anotherColor.create');
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

        AnotherColor::create(request()->all());
        return redirect('admin/anotherColor');

    }

    public function edit($id)
    {
        $anotherLines = AnotherColor::findOrFail($id);
        return view('pages.anotherColor.edit',compact('anotherLines'));
    }

    public function update($id,Request $request)
    {
        $anotherLines = AnotherColor::findOrFail($id);
        $anotherLines->update(request()->all());
        return redirect('admin/anotherColor');
    }

    public function destroy($id)
    {
        $anotherLines = AnotherColor::findOrFail($id);
        $anotherLines->delete();

        return redirect('admin/anotherColor');
    }
}
