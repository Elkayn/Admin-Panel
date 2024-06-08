<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Requests\Review\UpdateEnRequest;
use App\Http\Requests\Review\UpdateRuRequest;
use App\Http\Requests\Review\UpdateTtRequest;

use App\Models\ReviewEn;
use App\Models\ReviewRu;
use App\Models\ReviewTt;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRuRequest $requestRu, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt, ReviewRu $reviewRu, ReviewEn $reviewEn, ReviewTt $reviewTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        $reviewRu->update($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        $reviewEn->where('id', '=', $reviewRu->id)->update($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        $reviewTt->where('id', '=', $reviewRu->id)->update($dataTt);

        return view('admin.review.show', compact('reviewRu', 'reviewEn', 'reviewTt'));
    }
}
