<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(PromoEn $promo, PromoRu $promor, PromoTt $promot){
        $promo->delete();
        $promor->where('id', '=', $promo->id)->delete();
        $promot->where('id', '=', $promo->id)->delete();
        return redirect()->route('admin.promo.index');
    }

    public function del(Request $request, PromoEn $promo, PromoRu $promor, PromoTt $promot){
        $request->validate([
           'promo_ids' => 'required|array',
            'promo_ids.*' => 'integer'
        ]);

        $promoIds = $request->input('promo_ids');
        $promo->whereIn('id', $promoIds)->delete();
        $promor->whereIn('id', $promoIds)->delete();
        $promot->whereIn('id', $promoIds)->delete();
        return redirect()->route('admin.promo.index');
    }
}
