<?php

namespace App\Http\Controllers;

use App\PartContacts;
use App\PartnerShip;
use App\partnerShipContacts;
use Illuminate\Http\Request;


class PartnerShipController extends Controller
{
    public function index()
    {
        $contacts = PartContacts::all();
        $blogs = PartnerShip::all();
        return view('pages.partnerShips.index',compact('blogs','contacts'));
    }

    /*
     * Методы CRUD для  страницы "Партнёрство"
     */

    /*Показать весь контент главной страницы
    с возможностью создать,удалить или обновить
    */

    public function show()
    {
        $blogs = PartnerShip::all();
        return view('pages.partnerShips.show',compact('blogs'));
    }

    /*
     *Метод для создания нового контента
     */

    public function create()
    {
        return view('pages.partnerShips.create');
    }

    public function store(Request $request)
    {
        //Валидацию введенных данных
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        PartnerShip::create(request([
            'description',
        ]));

        return redirect('/admin/partnerShips');
    }

    public function edit($id)
    {
        $blogs = PartnerShip::findOrFail($id);

        return view('pages.partnerShips.edit',compact('blogs'));
    }

    /*
     * Метод ,который находит по id блог и обновляет его
     */

    public function update($id,Request $request)
    {

        //Валидацию введенных данных
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        $blogs = PartnerShip::findOrFail($id);
        $blogs->update($request->all());

        return redirect('/admin/partnerShips');
    }

    /*
     *Метод который находит блог по id и удаляет его
     */
    public function destroy($id)
    {
        $blogs = PartnerShip::findOrFail($id);
        $blogs->delete();
        return redirect('/admin/partnerShips');
    }

}
