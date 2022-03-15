<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getContent($id)
    {
        return SiteSetting::where('id', 1)->get();
    }
}
