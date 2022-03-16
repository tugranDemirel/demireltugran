<?php

namespace App\Http\Controllers\admin\work;

use App\Helper\fileUpload;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\Work;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('admin.work.index');
    }
    public function create()
    {
        return view('admin.work.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = fileUpload::newUpload(rand(1,1000), 'work', $request->file('image'), 0);
        $create = Work::create($all);
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
        if (Work::getCount($id) != 0)
        {
            $data = Work::getContent($id);
            return view('admin.work.edit', compact('data'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        if (Work::getCount($id) != 0)
        {
            $all = $request->except('_token');
            $data = Work::getContent($id);
            if ($request->hasFile('image'))
                $all['image'] = fileUpload::changeUpload(rand(1,1000), 'work', $request->file('image'), 0, $data, 'work');

            $update = Work::where('id', $id)->update($all);
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
        if (Work::getCount($id) != 0)
        {
            $data = Work::getContent($id);
            fileUpload::directoryDelete($data[0]['image']);
            Work::where('id', $id)->delete();
            return redirect()->back();
        }
    }

    public function data(Request $request)
    {
        $table = Work::query();
        $data = DataTables::of($table)
            ->addColumn('name', function ($table){
                return SocialMedia::getTitle($table->id);
            })
            ->addColumn('url', function ($table){
                return '<a target="_blank" href="'.Work::getUrl($table->id).'">'.Work::getUrl($table->id).'</a>';
            })
            ->addColumn('image', function ($table){
                return '<img  src="'.asset(Work::getImage($table->id)).'">';
            })
            ->addColumn('edit', function ($table){
                return '<a  href="'.route('home.media.edit', ['id'=>$table->id]).'">Düzenle</a>';
            })
            ->addColumn('delete', function ($table){
                return '<a  href="'.route('home.media.delete', ['id'=>$table->id]).'">Delete</a>';
            })
            ->rawColumns(['url', 'edit', 'delete', 'image'])
            ->make(true);
        return $data;
        return $data;
    }
}
