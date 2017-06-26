<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\User;
use App\Admin;
use App\Company;
use App\PartnerShip;

class AdminController extends Controller
{


    public function adminka()
    {
        return view('admin.adminka');
    }

    /*
     * Методы CRUD для страницы О компании
     */

    public function indexAboutUs()
    {
        $blogs = Company::all();
        return view('admin.aboutUs.index',compact('blogs'));
    }

    public function createAboutUs()
    {
        $blogs = Company::all();
        return view('admin.aboutUs.create',compact('blogs'));
    }

    public function storeAboutUs(Request $request)
    {
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        Company::create(request(['description']));
        return redirect('admin/aboutUs');
    }

    public function editAboutUs($id)
    {
        $blogs = Company::findOrFail($id);
        return view('admin.aboutUs.edit',compact('blogs'));
    }

    public function updateAboutUs($id,Request $request)
    {
        $blogs = Company::findorFail($id);
        $blogs->update($request->all());

        return redirect('admin/aboutUs');
    }

    public function destroyAboutUs($id)
    {
        $blog = Company::findOrFail($id);
        $blog->delete();

        return redirect('admin/aboutUs');
    }

    /*
     * Методы CRUD для страницы "Партнёрство"
     */
    public function indexPartnerShip()
    {
        $blogs = PartnerShip::all();
        return view('admin.partnerShip.index',compact('blogs'));
    }

    public function createPartnerShip()
    {
        $blogs = PartnerShip::all();
        return view('admin.partnerShip.create',compact('blogs'));
    }

    public function storePartnerShip(Request $request)
    {
        $this->validate(request(),[
            'description' => 'required|min:10',
        ]);

        PartnerShip::create(request(['description']));
        return redirect('admin/partnerShip');
    }

    public function editPartnerShip($id)
    {
        $blogs = PartnerShip::findOrFail($id);
        return view('admin.partnerShip.edit',compact('blogs'));
    }

    public function updatePartnerShip($id,Request $request)
    {
        $blogs = PartnerShip::findorFail($id);
        $blogs->update($request->all());

        return redirect('admin/partnerShip');
    }

    public function destroyPartnerShip($id)
    {
        $blog = PartnerShip::findOrFail($id);
        $blog->delete();

        return redirect('admin/partnerShip');
    }

}
