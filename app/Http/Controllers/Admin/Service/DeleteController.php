<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Promo;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Service $service, ServiceEn $serviceEn, ServiceTt $serviceTt){
        $service->delete();
        $serviceEn->where('id', '=', $service->id)->delete();
        $serviceTt->where('id', '=', $service->id)->delete();
        return redirect()->route('admin.service.index');
    }

    public function del(Request $request, Service $service, ServiceEn $serviceEn, ServiceTt $serviceTt){
        $request->validate([
            'service_ids' => 'required|array',
            'service_ids.*' => 'integer'
        ]);

        $serviceIds = $request->input('service_ids');
        $service->whereIn('id', $serviceIds)->delete();
        $serviceEn->whereIn('id', $serviceIds)->delete();
        $serviceTt->whereIn('id', $serviceIds)->delete();
        return redirect()->route('admin.service.index');
    }
}
