<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $aboutUs = Company::all();
        return view('pages.company.index',compact('aboutUs'));
    }



    /*
     * Методы CRUD для  страницы "О компании"
     */

    /*Показать весь контент главной страницы
    с возможностью создать,удалить или обновить
    */

    public function show()
    {
        $blogs = Company::all();
        return view('pages.company.show',compact('blogs'));
    }

    /*
     * Форма для создание нового блога на старнице
     */

    public function create()
    {
        return view('pages.company.create');
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

        Company::create(request([
            'description'
        ]));

        return redirect('admin/company');
    }


    public function edit($id)
    {
        $aboutUs = Company::findOrFail($id);
        return view('pages.company.edit',compact('aboutUs'));
    }

    /*
     * Метод ,который находит по id блог и обновляет его
     */

    public function update($id,Request $request)
    {
        $aboutUs = Company::findOrFail($id);

        $aboutUs->update($request->all());

        return redirect ('admin/company');
    }

    /*
     *Метод который находит блог по id и удаляет его
     */

    public function destroy($id)
    {
        $aboutUs = Company::findOrFail($id);
        $aboutUs->delete();

        return redirect('admin/company');

    }


}
