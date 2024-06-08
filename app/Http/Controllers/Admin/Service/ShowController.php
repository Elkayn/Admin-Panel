<?php

namespace App\Http\Controllers\Admin\Service;

use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Promo;

class ShowController extends BaseController
{
    public function __invoke(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }
}
