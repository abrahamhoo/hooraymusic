<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //
    public static function getNewMusic($num){

        $newAlbum = Album::getNewAlbum($num);
        $newSong = Song::getNewSong($num);
        $newArtist = Artist::getNewArtist($num);

        return array($newAlbum, $newSong, $newArtist);
    }

}
