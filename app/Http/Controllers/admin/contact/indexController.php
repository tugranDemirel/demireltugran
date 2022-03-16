<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Mail;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('admin.contact.index');
    }

    public function answer($id)
    {
        $data = Contact::getContent($id);
        return view('admin.contact.answer', compact('data'));
    }

    public function send(Request $request)
    {
        $id = $request->route('id');
        $c = Contact::getCount($id);
        return redirect()->back();
        if ($c != 0)
        {
            $data = Contact::getContent($id);
            dd($data[0]['name']);
        }
    }

    public function data(Request $request)
    {
        $table = Contact::query();
        $data = DataTables::of($table)
            ->addColumn('name', function ($table){
                return Contact::getTitle($table->id);
            })
            ->addColumn('subject', function ($table){
                return Contact::getSubject($table->id);
            })
            ->addColumn('edit', function ($table){
                return '<a href="'.route('home.contact.answer', ['id'=>$table->id]).'">Cevapla</a>';
            })
            ->rawColumns(['edit'])
            ->make(true);
        return $data;
    }
}
