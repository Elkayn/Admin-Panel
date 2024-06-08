<?php

namespace App\Http\Controllers\Admin\Price;

use App\Http\Requests\Price\StoreEnRequest;
use App\Http\Requests\Price\StoreRuRequest;
use App\Http\Requests\Price\StoreTtRequest;
use App\Models\PriceEn;
use App\Models\PriceRu;
use App\Models\PriceTt;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use App\Models\WorkEn;
use App\Models\WorkRu;
use App\Models\WorkTt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRuRequest $requestRu, StoreEnRequest $requestEn, StoreTtRequest $requestTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        PriceRu::create($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        PriceEn::create($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        PriceTt::create($dataTt);

        return redirect()->route('admin.price.index');
    }
}
