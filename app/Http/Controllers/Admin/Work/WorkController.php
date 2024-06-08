<?php

namespace App\Http\Controllers\Admin\Work;

use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WorkController extends BaseController
{
    public function __invoke()
    {
        $workRu = WorkRu::all();

        return view('admin.work.index', compact('workRu'));
    }
}
