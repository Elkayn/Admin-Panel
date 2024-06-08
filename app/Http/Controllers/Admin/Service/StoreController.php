<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Requests\Service\StoreEnRequest;
use App\Http\Requests\Service\StoreRuRequest;
use App\Http\Requests\Service\StoreTtRequest;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRuRequest $request, StoreEnRequest $requestEn, StoreTtRequest $requestTt){
        $data = $request->validated();
        $data['image'] =  Storage::disk('public')->put('/images', $data['image']);
        Service::create($data);

        $dataEn = $requestEn->validated();
        $dataEn['imageEn'] =  Storage::disk('public')->put('/images', $dataEn['imageEn']);
        ServiceEn::create($dataEn);

        $dataTt = $requestTt->validated();
        $dataTt['imageTt'] =  Storage::disk('public')->put('/images', $dataTt['imageTt']);
        ServiceTt::create($dataTt);

        return redirect()->route('admin.service.index');
    }
}
