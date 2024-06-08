<?php

namespace App\Http\Controllers\Admin\Price;

use App\Http\Requests\Price\UpdateEnRequest;
use App\Http\Requests\Price\UpdateRuRequest;
use App\Http\Requests\Price\UpdateTtRequest;
use App\Models\PriceEn;
use App\Models\PriceRu;
use App\Models\PriceTt;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRuRequest $requestRu, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt, PriceRu $priceRu, PriceEn $priceEn, PriceTt $priceTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        $priceRu->update($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        $priceEn->where('id', '=', $priceRu->id)->update($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        $priceTt->where('id', '=', $priceRu->id)->update($dataTt);

        return view('admin.price.show', compact('priceRu', 'priceEn', 'priceTt'));
    }
}
