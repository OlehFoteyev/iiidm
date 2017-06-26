<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $all = Portfolio::latest()
        ->paginate(18);
        return view ('pages.portfolio.index',compact('all'));
    }

    public function show()
    {
        $all = Portfolio::latest()->paginate(5);
        return view('pages.portfolio.show',compact('all'));
    }

    public function create()
    {
        return view('pages.portfolio.create');
    }

    public function store(Request $request)
    {

        if($request->hasFile('file')) {
            $filename =  $request->file->getClientOriginalName();

            $filesize =  $request->file->getClientSize();

            $request->file->storeAs('images/ourProjects',$filename);

            $file = new Portfolio;

            $file->title_img=$filename;

            $file->size = $filesize;

            $file->save();

            return redirect('admin/portfolio');

        }
        return $request->all() ;
    }

    public function destroy($id)
    {
        $project = Portfolio::findOrFail($id);
        $project->delete();
        return redirect('admin/portfolio');
    }
}
