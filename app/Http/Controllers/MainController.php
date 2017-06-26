<?php

namespace App\Http\Controllers;

use App\Main;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $blogs = Main::all();
        return view('pages.main.index',compact('blogs'));
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
        $blogs = Main::all();
        return view('pages.main.show',compact('blogs'));
    }

     /*
     * Создание нового блога на главной старнице
     */

    public function create()
    {
        return view('pages.main.create',compact('blogs'));
    }

     /*
     * Метод,который отвечает за принятие данных из формы
     * и загрузку их в бд
     */

    public function store(Request $request)
    {
        /*Можно проверить на вхождение данных
        dd(request()->all());*/

        //Валидацию введенных данных
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        Main::create(request(['description']));

        return redirect ('/admin/show');
    }

    public function edit($id)
    {
        $blogs = Main::findOrFail($id);
        return view('pages.main.edit',compact('blogs'));
    }

    /*
     * Метод ,который находит по id блог и обновляет его
     */

    public function update($id,Request $request)
    {
        $blogs = Main::findOrFail($id);

        $blogs->update( $request->all());

        return redirect('/admin/show');
    }

    /*
     *Метод который находит блог по id и удаляет его
     */

    public function destroy($id)
    {
        $blogs = Main::findOrFail($id);
        $blogs->delete();

        return redirect('admin/show');
    }




}
