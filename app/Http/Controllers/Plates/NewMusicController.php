<?php

namespace App\Http\Controllers\Plates;

use App\Model\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewMusicController extends Controller
{
    //

    function index(){
        $newMusic = Music::getNewMusic(12);
        return view('plates.new_music')->with('newMusic', $newMusic);
    }
}
