<?php

namespace App\Http\Controllers;

use App\PartContacts;
use Illuminate\Http\Request;

class PartContactsController extends Controller
{

    public function show()
    {
        $contacts = PartContacts::all();
        return view('pages.contactsPartner.show',compact('contacts'));
    }

    public function create()
    {
        return view('pages.contactsPartner.create');
    }

    public function store(Request $request)
    {
        //Валидацию введенных данных
        $this->validate(request(),[
            'name' => 'required|string|max:255',
            'phone' => 'required|min:7',
            'email' => 'required|string|email|max:255',
        ]);

        PartContacts::create(request([
            'name',
            'phone',
            'email',
        ]));

        return redirect('admin/partnerContacts');

    }

    public function edit($id)
    {
        $contacts = PartContacts::findOrFail($id);

        return view('pages.contactsPartner.edit',compact('contacts'));
    }

    public function update($id,Request $request)
    {
        $contacts = PartContacts::findOrFail($id);

        $contacts->update($request->all());

        return redirect('admin/partnerContacts');
    }

    public function destroy($id)
    {
        $contacts = PartContacts::findOrFail($id);
        $contacts->delete();
        return redirect('admin/partnerContacts');
    }
}
