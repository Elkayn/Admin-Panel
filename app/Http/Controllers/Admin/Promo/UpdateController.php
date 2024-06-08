<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Http\Requests\Promo\UpdateEnRequest;
use App\Http\Requests\Promo\UpdateRuRequest;
use App\Http\Requests\Promo\UpdateTtRequest;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateEnRequest $request, UpdateRuRequest $requestr, UpdateTtRequest $requestt, PromoEn $promo, PromoRu $promor, PromoTt $promot){

        $data = $request->validated();
        $data['image'] =  Storage::disk('public')->put('/images', $data['image']);
        $promo->update($data);

        $datar = $requestr->validated();
        $datar['imager'] =  Storage::disk('public')->put('/images', $datar['imager']);
        $promor->where('id', '=', $promo->id)->update($datar);


        $datat = $requestt->validated();
        $datat['imaget'] =  Storage::disk('public')->put('/images', $datat['imaget']);
        $promot->where('id', '=', $promo->id)->update($datat);


        return view('admin.promo.show', compact('promo', 'promor', 'promot'));
    }
}
