<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * @param $id
     * @return => social Media count
     */
    static function getCount($id)
    {
        $c = SocialMedia::where('id', $id)->count();
        return $c;
    }
    /**
     * @param $id
     * @return => social Media content
     */
    static function getContent($id)
    {
        $data = SocialMedia::where('id', $id)->get();
        return $data;
    }

    /**
     * @param $id
     * @return => social Media name
     */
    static function getTitle ($id)
    {
        $c = SocialMedia::where('id', $id)->get();
        return $c[0]['name'];
    }

    /**
     * @param $id
     * @return => social Media url
     */
    static function getUrl($id)
    {
        $c = SocialMedia::where('id', $id)->get();
        return $c[0]['url'];
    }
}
