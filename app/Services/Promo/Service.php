<?php

namespace App\Services\Promo;

use App\Models\Promo;
use App\Models\PromoEn;
use Illuminate\Support\Facades\Storage;

class Service
{
    public static function create($data)
    {
        $data['image'] =  Storage::disk('public')->put('/images', $data['image']);
        PromoEn::create($data);
        return $data;
    }
    public static function creater($datar)
    {
        $datar['imager'] =  Storage::disk('public')->put('/images', $datar['imager']);
        return $datar;
    }
    public static function createt($datat)
    {
        $datat['imaget'] =  Storage::disk('public')->put('/images', $datat['imaget']);
        return $datat;
    }
}
