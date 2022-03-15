<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * @param $id => blog verisi
     * @return $c =>veri var ise sayiisini yok ise 0 geriye geliyor
     */
    static function getCount($id)
    {
        $c = Blog::where('id', $id)->count();
        return $c;
    }

    /**
     * @param $id
     * @return mixed
     */
    static function getContent($id)
    {
        $c = Blog::where('id', $id)->get();
        return $c;
    }
    /*
     *
     */
    static function getTitle($id)
    {
        $c = Blog::where('id', $id)->get();
        return $c[0]['title'];
    }

    static function getImage($id)
    {
        $c = Blog::where('id', $id)->get();
        return $c[0]['image'];
    }
}
