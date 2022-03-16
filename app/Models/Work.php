<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * @param $id
     * @return => work count
     */
    static function getCount($id)
    {
        $c = Work::where('id', $id)->count();
        return $c;
    }
    /**
     * @param $id
     * @return => swork content
     */
    static function getContent($id)
    {
        $data = Work::where('id', $id)->get();
        return $data;
    }

    /**
     * @param $id
     * @return => work name
     */
    static function getTitle ($id)
    {
        $c = Work::where('id', $id)->get();
        return $c[0]['title'];
    }

    /**
     * @param $id
     * @return => work url
     */
    static function getUrl($id)
    {
        $c = Work::where('id', $id)->get();
        return $c[0]['url'];
    }
    /**
     * @param $id
     * @return => work Image
     */
    static function getImage($id)
    {
        $c = Work::where('id', $id)->get();
        return $c[0]['image'];
    }
}
