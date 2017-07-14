<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    public static function getNewArtist($num){
        $newArtist = static::orderBy('create_time', 'DESC')
            ->take($num)
            ->get()
            ->toArray();
        return $newArtist;
    }
}
