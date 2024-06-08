<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends BaseController
{
    public function __invoke(PromoEn $promo)
    {
        $promor = PromoRu::all();
        $promot = PromoTt::all();
        return view('admin.promo.edit', compact('promo', 'promor', 'promot'));
    }
}
