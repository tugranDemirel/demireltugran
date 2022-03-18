<?php

namespace App\Http\Controllers\front\home;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\Work;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class indexController extends Controller
{
    //
    public function index()
    {
        $array = [
          'siteSetting' => SiteSetting::getContent(1),
            'projects' => Work::all()
        ];
        return view('index', $array);
    }

    public function contact(Request $request)
    {
        $all = $request->except('_token');
        dd($all);
    }
}
