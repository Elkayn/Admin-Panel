<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Requests\Work\UpdateEnRequest;
use App\Http\Requests\Work\UpdateRuRequest;
use App\Http\Requests\Work\UpdateTtRequest;
use App\Models\WorkRu;
use App\Models\WorkEn;
use App\Models\WorkTt;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRuRequest $requestRu, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt, WorkRu $workRu, WorkEn $workEn, WorkTt $workTt){
        $dataRu = $requestRu->validated();
        $dataRu['imageRu'] =  Storage::disk('public')->put('/images', $dataRu['imageRu']);
        $workRu->update($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        $workEn->where('id', '=', $workRu->id)->update($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        $workTt->where('id', '=', $workRu->id)->update($dataTt);

        return view('admin.work.show', compact('workRu', 'workEn', 'workTt'));
    }
}
