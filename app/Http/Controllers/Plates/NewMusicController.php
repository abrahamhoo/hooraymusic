<?php

namespace App\Http\Controllers\Plates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewMusicController extends Controller
{
    //

    function index(){
        return view('plates.new_music');
    }
}
