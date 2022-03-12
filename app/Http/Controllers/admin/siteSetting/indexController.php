<?php

namespace App\Http\Controllers\admin\siteSetting;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        $siteSetting = SiteSetting::where('id', 1)->get();
        return view('admin.siteSetting.index', compact('siteSetting'));
    }
    public function update(Request $request)
    {
        dd($request->all());
        return view('admin.siteSetting.index');
    }
}
