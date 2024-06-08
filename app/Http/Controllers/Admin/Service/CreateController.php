<?php

namespace App\Http\Controllers\Admin\Service;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.service.create');
    }
}
