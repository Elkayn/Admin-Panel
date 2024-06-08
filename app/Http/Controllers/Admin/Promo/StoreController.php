<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Http\Requests\Promo\StoreRequest;
use App\Http\Requests\Promo\StoreRuRequest;
use App\Http\Requests\Promo\StoreTtRequest;
use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, StoreRuRequest $requestr, StoreTtRequest $requestt){
        $data = $request->validated();
        $data['image'] =  Storage::disk('public')->put('/images', $data['image']);
        PromoEn::create($data);

        $datar = $requestr->validated();
        $datar['imager'] =  Storage::disk('public')->put('/images', $datar['imager']);
        PromoRu::create($datar);

        $datat = $requestt->validated();
        $datat['imaget'] =  Storage::disk('public')->put('/images', $datat['imaget']);
        PromoTt::create($datat);

        return redirect()->route('admin.promo.index');
    }
}
