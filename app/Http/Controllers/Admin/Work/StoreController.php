<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Requests\Work\StoreEnRequest;
use App\Http\Requests\Work\StoreRuRequest;
use App\Http\Requests\Work\StoreTtRequest;
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
        WorkRu::create($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        WorkEn::create($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        WorkTt::create($dataTt);

        return redirect()->route('admin.work.index');
    }
}
