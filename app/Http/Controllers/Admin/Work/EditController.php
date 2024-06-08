<?php

namespace App\Http\Controllers\Admin\Work;

use App\Models\Promo;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use App\Models\WorkEn;
use App\Models\WorkRu;
use App\Models\WorkTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends BaseController
{
    public function __invoke(WorkRu $workRu)
    {
        $workEn = WorkEn::all();
        $workTt = WorkTt::all();
        return view('admin.work.edit', compact('workRu', 'workEn', 'workTt'));
    }
}
