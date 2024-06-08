<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Requests\Vacancy\UpdateEnRequest;
use App\Http\Requests\Vacancy\UpdateRuRequest;
use App\Http\Requests\Vacancy\UpdateTtRequest;

use App\Models\VacancyEn;
use App\Models\VacancyRu;
use App\Models\VacancyTt;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRuRequest $requestRu, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt, VacancyRu $vacancyRu, VacancyEn $vacancyEn, VacancyTt $vacancyTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        $vacancyRu->update($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        $vacancyEn->where('id', '=', $vacancyRu->id)->update($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        $vacancyTt->where('id', '=', $vacancyRu->id)->update($dataTt);

        return view('admin.vacancy.show', compact('vacancyRu', 'vacancyEn', 'vacancyTt'));
    }
}
