<?php

namespace App\Http\Controllers\admin\reference;

use App\Helper\fileUpload;
use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class indexController extends Controller
{
    public function index()
    {
        return view('admin.reference.index');
    }
    public function create()
    {
        return view('admin.reference.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = fileUpload::newUpload(rand(1,1000), 'reference', $request->file('image'),0);
        $create = Reference::create($all);
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
        if (Reference::getCount($id) != 0)
        {
            $data = Reference::getContent($id);
            return view('admin.reference.edit', compact('data'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        if (Reference::getCount($id) != 0)
        {
            $all = $request->except('_token');
            $data = Reference::getContent($id);
            if ($request->hasFile('image'))
                $all['image'] = fileUpload::changeUpload(rand(1,1000), 'reference', $request->file('image'), 0, $data, 'reference');

            $update = Reference::where('id', $id)->update($all);
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
        if (Reference::getCount($id) != 0)
        {
            $data = Reference::getContent($id);
            fileUpload::directoryDelete($data[0]['image']);
            Reference::where('id', $id)->delete();
            return redirect()->back();
        }
    }

    public function data(Request $request)
    {
        $table = Reference::query();

        $data = DataTables::of($table)
            ->addColumn('image', function ($table){
                return '<img src="'. asset(Reference::getImage($table->id)).'" alt="..." class="img-thumbnail">';
            })
            ->addColumn('name', function ($table){
              return Reference::getTitle($table->id);
            })
            ->addColumn('edit', function ($table){
                return '<a href="'.route('home.reference.edit', ['id'=>$table->id]).'">Düzenle</a>';
            })
            ->addColumn('delete', function ($table){
                return '<a href="'.route('home.reference.delete', ['id'=>$table->id]).'">Delete</a>';
            })
            ->rawColumns(['image', 'edit', 'delete'])
            ->make(true);
        return $data;
    }
}
