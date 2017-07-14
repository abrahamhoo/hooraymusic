<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    public static function getNewAlbum($num){
        $newAlbum = static::orderBy('create_time', 'DESC')
            ->take($num)
            ->get()
            ->toArray();
        return $newAlbum;
    }
}
