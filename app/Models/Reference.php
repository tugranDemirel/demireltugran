<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $guarded = [];

    static function getCount($id)
    {
        $c = Reference::where('id', $id)->count();
        return $c;
    }
    static function getContent($id)
    {
        $data = Reference::where('id', $id)->get();
        return $data;
    }

    /**
     * @param $id
     * @return => reference name
     */
    static function getTitle($id)
    {
        $c = Reference::where('id', $id)->get();
        return $c[0]['name'];
    }

    static function getImage($id)
    {
        $c = Reference::where('id', $id)->get();
        return $c[0]['image'];
    }
}
