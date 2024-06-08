<?php

namespace App\Http\Controllers\Admin\Price;

use App\Models\PriceEn;
use App\Models\PriceRu;
use App\Models\PriceTt;
use App\Models\WorkEn;
use App\Models\WorkTt;
use App\Models\WorkRu;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(PriceRu $priceRu, PriceEn $priceEn, PriceTt $priceTt){
        $priceRu->delete();
        $priceEn->where('id', '=', $priceRu->id)->delete();
        $priceTt->where('id', '=', $priceRu->id)->delete();
        return redirect()->route('admin.price.index');
    }

    public function del(Request $request, PriceRu $priceRu, PriceEn $priceEn, PriceTt $priceTt){
        $request->validate([
            'service_ids' => 'required|array',
            'service_ids.*' => 'integer'
        ]);

        $serviceIds = $request->input('service_ids');
        $priceRu->whereIn('id', $serviceIds)->delete();
        $priceEn->whereIn('id', $serviceIds)->delete();
        $priceTt->whereIn('id', $serviceIds)->delete();
        return redirect()->route('admin.price.index');
    }
}
