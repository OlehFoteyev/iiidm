<?php

namespace App\Http\Controllers;

use App\RedLine;
use Illuminate\Http\Request;

class RedLineController extends Controller
{

    /*
    * Методы CRUD для  страницы "Главная"
    */

    /*
    *Показать весь контент главной страницы
    *с возможностью создать,удалить или обновить
    */

    public function show()
    {
        $redLines = RedLine::all();
        return view('pages.redLine.show',compact('redLines'));
    }

    /*
     * Форма для создание новых цен красного цвета
     */

    public function create()
    {
        return view('pages.redLine.create');
    }

    /*
     * Метод,который отвечает за принятие данных из формы
     * и загрузку их в бд
     */

    public function store(Request $request)
    {
        /*Можно проверить на вхождение данных
                dd(request()->all());*/

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


        RedLine::create(request()->all());
        return redirect('admin/redLines');
    }

    public function edit($id)
    {
        $redLines = RedLine::findOrFail($id);
        return view('pages.redLine.edit',compact('redLines'));
    }

    /*
     * Метод ,который находит по id строку цен и обновляет её
     */

    public function update(Request $request,$id)
    {

        //Валидация введенных данных
        $this->validate(request(),[
            'size' => 'required|min:1',
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

        $redLines = RedLine::findOrFail($id);
        $redLines->update(request()->all());

        return redirect('admin/redLines');
    }

    /*
     *Метод который находит строку цен по id и удаляет её
     */

    public function destroy($id)
    {
        $redLines = RedLine::findOrFail($id);
        $redLines->delete();
        return redirect('admin/redLines');
    }
}
