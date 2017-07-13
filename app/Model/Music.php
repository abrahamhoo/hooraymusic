<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //
    static function getNewMusic($num){
        $newMusic = static::orderBy('release_date', 'DESC')
                        ->take($num)
                        ->get();
        return $newMusic;
    }
}
