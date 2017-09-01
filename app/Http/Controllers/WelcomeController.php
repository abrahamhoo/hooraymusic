<?php

namespace App\Http\Controllers;

use App\Model\Banner;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    function index(){
        $welcomeBanner = Banner::getBannerByType('welcome', 3);
        return view('welcome')
            ->with('welcomeBanner', $welcomeBanner);
    }
}
