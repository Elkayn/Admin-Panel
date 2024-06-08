<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Requests\Service\UpdateEnRequest;
use App\Http\Requests\Service\UpdateRuRequest;
use App\Http\Requests\Service\UpdateTtRequest;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRuRequest $requestRu, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt, Service $service, ServiceEn $serviceEn, ServiceTt $serviceTt){
        $dataRu = $requestRu->validated();
        $dataRu['image'] =  Storage::disk('public')->put('/images', $dataRu['image']);
        $service->update($dataRu);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        $serviceEn->where('id', '=', $service->id)->update($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        $serviceTt->where('id', '=', $service->id)->update($dataTt);

        return view('admin.service.show', compact('service', 'serviceEn', 'serviceTt'));
    }
}
