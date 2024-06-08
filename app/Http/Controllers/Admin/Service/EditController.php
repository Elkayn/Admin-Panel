<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Promo;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends BaseController
{
    public function __invoke(Service $service)
    {
        $serviceEn = ServiceEn::all();
        $serviceTt = ServiceTt::all();
        return view('admin.service.edit', compact('service', 'serviceEn', 'serviceTt'));
    }
}
