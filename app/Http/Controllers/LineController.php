<?php

namespace App\Http\Controllers;

use App\AnotherColor;
use App\FullColor;
use App\Line;
use App\RedLine;
use Illuminate\Http\Request;

class LineController extends Controller
{
    public function index()
    {
        $redLines = RedLine::all();
        $anotherLines = AnotherColor::all();
        $fullLines = FullColor::all();
        $blogs =Line::all();
        return view('pages.lines.index',compact('blogs','redLines','anotherLines','fullLines'));
    }

    /*
    * Методы CRUD для  страницы "Главная"
    */

    /*
    *Показать весь контент главной страницы
    *с возможностью создать,удалить или обновить
    */

    public function show()
    {
        $blogs = Line::all();
        return view('pages.lines.show',compact('blogs'));
    }

    /*
     * Форма для создание нового контента
     */

    public function create()
    {
        return view('pages.lines.create');
    }

    /*
     * Метод,который отвечает за принятие данных из формы
     * и загрузку их в бд
     */

    public function store(Request $request)
    {
        //Валидацию введенных данных
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        Line::create(request(['description']));
        return redirect ('/admin/lines');
    }

    public function edit(Request $request,$id)
    {
        $blogs = Line::findOrFail($id);
        return view('pages.lines.edit',compact('blogs'));
    }

    /*
     * Метод ,который находит по id блог и обновляет его
     */

    public function update(Request $request,$id)
    {
        $blogs= Line::findOrFail($id);
        $blogs->update($request->all());

        return redirect('admin/lines');
    }

    /*
     *Метод который находит блог по id и удаляет его
     */

    public function destroy($id)
    {
        $blogs = Line::findOrFail($id);
        $blogs->delete();
        return redirect('admin/lines');
    }
}
