<?php

namespace App\Http\Controllers\admin\socialMedia;

use App\Helper\fileUpload;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class indexController extends Controller
{
    public function index()
    {
        return view('admin.socialMedia.index');
    }
    public function create()
    {
        return view('admin.socialMedia.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $create = SocialMedia::create($all);
        if ($create)
        {
            return redirect()->back()->with('status', 'Ekleme işlemi başarılı bir şekilde gerçekleştirildi.');
        }
        else
        {
            return redirect()->back()->with('statusDanger', 'Ekleme işlemi gerçekleştirilemedi.');
        }
    }

    public function edit($id)
    {
        if (SocialMedia::getCount($id) != 0)
        {
            $data = SocialMedia::getContent($id);
            $data = $data[0]['id'];
            return view('admin.socialMedia.edit', compact('data'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        if (SocialMedia::getCount($id) != 0)
        {
            $all = $request->except('_token');
            $data = SocialMedia::getContent($id);

            $update = SocialMedia::where('id', $id)->update($all);
            if ($update)
            {
                return redirect()->back()->with('status', 'Güncelleme işlemi başarılı bir şekilde gerçekleştirildi.');
            }
            else
            {

                return redirect()->back()->with('statusDanger', 'Güncelleme işlemi gerçekleştirilemedi.');
            }
        }
        return redirect()->back()->with('statusDanger', 'Güncelleme işlemi gerçekleştirilemedi.');

    }

    public function delete($id)
    {
        if (SocialMedia::getCount($id) != 0)
        {
            SocialMedia::where('id', $id)->delete();
            return redirect()->back();
        }
    }

    public function data(Request $request)
    {
        $table = SocialMedia::query();
        $data = DataTables::of($table)
            ->addColumn('name', function ($table){
                return SocialMedia::getTitle($table->id);
            })
            ->addColumn('url', function ($table){
                return '<a target="_blank" href="'.SocialMedia::getUrl($table->id).'">'.SocialMedia::getUrl($table->id).'</a>';
            })
            ->addColumn('edit', function ($table){
                return '<a  href="'.route('home.media.edit', ['id'=>$table->id]).'">Düzenle</a>';
            })
            ->addColumn('delete', function ($table){
                return '<a  href="'.route('home.media.delete', ['id'=>$table->id]).'">Delete</a>';
            })
            ->rawColumns(['url', 'edit', 'delete'])
            ->make(true);
        return $data;
    }
}
