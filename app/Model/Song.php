<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Song extends Model
{
    //
    public static function getNewSong($num){
        $newSong = DB::table('songs')
            ->join('albums', 'albums.album_id', '=', 'songs.album_id')
            ->orderBy('songs.create_time', 'DESC')
            ->take($num)
            ->get()
            ->map(function ($item, $key) {
                return (array) $item;
            })
        ->all();
        return $newSong;
    }
}
