<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

class PromoController extends BaseController
{
    public function __invoke()
    {
        $promos = PromoEn::all();
        return view('admin.promo.index', compact('promos'));
    }
}
