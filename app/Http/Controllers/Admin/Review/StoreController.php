<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Requests\Review\StoreEnRequest;
use App\Http\Requests\Review\StoreRuRequest;
use App\Http\Requests\Review\StoreTtRequest;
use App\Models\ReviewEn;
use App\Models\ReviewRu;
use App\Models\ReviewTt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRuRequest $requestRu, StoreEnRequest $requestEn, StoreTtRequest $requestTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        ReviewRu::create($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        ReviewEn::create($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        ReviewTt::create($dataTt);

        return redirect()->route('admin.review.index');
    }
}
