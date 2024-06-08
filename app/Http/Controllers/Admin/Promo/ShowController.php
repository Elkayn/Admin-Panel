<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Promo;

class ShowController extends BaseController
{
    public function __invoke(PromoEn $promo)
    {
        return view('admin.promo.show', compact('promo'));
    }
}
