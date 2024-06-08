<?php

namespace App\Http\Controllers\Admin\Work;

use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Promo;

class ShowController extends BaseController
{
    public function __invoke(WorkRu $workRu)
    {
        return view('admin.work.show', compact('workRu'));
    }
}
