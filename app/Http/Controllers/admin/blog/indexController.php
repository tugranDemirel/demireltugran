<?php

namespace App\Http\Controllers\admin\blog;

use App\Helper\fileUpload;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('admin.blog.index');
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['userId'] = Auth::id();
        $data = Auth::id();
        $all['contactImage'] = fileUpload::changeUpload(rand(1,1000), 'blog', $request->file('image'), 0, $data, 'blog');
        $create = Blog::create($all);
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
        if (Blog::getCount($id) != 0)
        {
            $data = Blog::getContent($id);
            return view('admin.blog.edit', compact('data'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        if (Blog::getCount($id) != 0)
        {
            $all = $request->except('_token');
            $data = Blog::getContent($id);
            $all['image'] = fileUpload::changeUpload(rand(1,1000), 'blog', $request->file('image'), 0, $data, 'blog');

            $update = Blog::where('id', $id)->update($all);
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
        if (Blog::getCount($id) != 0)
        {
           $data = Blog::getContent($id);
           fileUpload::directoryDelete($data[0]['image']);
           Blog::where('id', $id)->delete();
           return redirect()->back();
        }
    }

    public function data(Request $request)
    {
        $table = Blog::query();
        $data = DataTables::of($table)
            ->addColumn('edit', function ($table){
                return '<a href="'.route('home.blog.edit', ['id'=>$table]).'">Düzenle</a>';
            })
            ->addColumn('delete', function ($table){
                return '<a href="'.route('home.blog.delete', ['id'=>$table]).'">Delete</a>';
            })
            ->addColumn('title', function ($table){
                return Blog::getTitle($table->id);
            })
            ->addColumn('image', function ($table){
                return Blog::getImage($table->id);
            })
            ->rawColumns(['edit', 'delete', 'title'])
            ->make(true);
    }

}
