<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    static function getCount($id)
    {
        return Contact::where('id', $id)->count();
    }
    static function getContent($id)
    {
        return Contact::where('id', $id)->get();
    }

    static function getTitle($id)
    {
        $title = Contact::where('id', $id)->get();
        return $title[0]['name'];
    }

    static function getSubject($id)
    {
        $subject = self::getContent($id);
        return $subject[0]['subject'];
    }
}
