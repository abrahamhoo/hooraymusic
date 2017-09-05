<?php

namespace App\Http\Controllers\Plates;

use App\Model\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewMusicController extends Controller
{
    //
    function index(){
        list($newAlbum, $newSong, $newArtist) = Music::getNewMusic(4);

        return view('plates.new_music')
            ->with('newAlbum', $newAlbum)
            ->with('newSong', $newSong)
            ->with('newArtist', $newArtist);
    }
}
