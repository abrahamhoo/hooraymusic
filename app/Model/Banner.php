<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    public static function getBannerByType($type, $num){
        $banners = static::orderBy('created_at', 'DESC')
            ->where('type', $type)
            ->where('is_display', 1)
            ->take($num)
            ->get()
            ->toArray();
        return $banners;
    }
}
