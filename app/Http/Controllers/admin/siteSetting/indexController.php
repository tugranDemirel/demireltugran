<?php

namespace App\Http\Controllers\admin\siteSetting;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Helper\fileUpload;

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
        $all = $request->except('_token');
        $data = SiteSetting::where('id', 1)->get();
        $all['profileImage'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('profileImage'), 0, $data, 'profileImage');
        $all['backgroundImage'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('backgroundImage'), 0, $data, 'backgroundImage');
        $all['aboutImage'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('aboutImage'), 0, $data, 'aboutImage');
        $all['logo'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('logo'), 0, $data, 'logo');
        $all['svg'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('svg'), 0, $data, 'svg');
        $all['contactImage'] = fileUpload::changeUpload(rand(1,1000), 'profil', $request->file('contactImage'), 0, $data, 'contactImage');
        $update = SiteSetting::where('id', 1)->update($all);

        if ($update)
        {
            return redirect()->back()->with('status', 'Güncelleme işlemi başarılı bir şekilde gerçekleştirildi');
        }
        else
            return redirect()->back()->with('statusDanger', 'Güncelleme işlemi gerçekleştirilemedi');
        return redirect()->back();
    }
}
