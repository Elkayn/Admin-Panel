<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Requests\Vacancy\StoreEnRequest;
use App\Http\Requests\Vacancy\StoreRuRequest;
use App\Http\Requests\Vacancy\StoreTtRequest;
use App\Models\VacancyEn;
use App\Models\VacancyRu;
use App\Models\VacancyTt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRuRequest $requestRu, StoreEnRequest $requestEn, StoreTtRequest $requestTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        VacancyRu::create($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        VacancyEn::create($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        VacancyTt::create($dataTt);

        return redirect()->route('admin.vacancy.index');
    }
}
