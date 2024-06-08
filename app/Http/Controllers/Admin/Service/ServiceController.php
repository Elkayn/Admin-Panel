<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Promo;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ServiceController extends BaseController
{
    public function __invoke()
    {
        $services = Service::all();

        return view('admin.service.index', compact('services'));
    }
}
