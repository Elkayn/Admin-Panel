<?php

namespace App\Http\Controllers\Admin\Work;

use App\Models\WorkEn;
use App\Models\WorkTt;
use App\Models\WorkRu;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(WorkRu $workRu, WorkEn $workEn, WorkTt $workTt){
        $workRu->delete();
        $workEn->where('id', '=', $workRu->id)->delete();
        $workTt->where('id', '=', $workRu->id)->delete();
        return redirect()->route('admin.work.index');
    }

    public function del(Request $request, WorkRu $workRu, WorkEn $workEn, WorkTt $workTt){
        $request->validate([
            'service_ids' => 'required|array',
            'service_ids.*' => 'integer'
        ]);

        $serviceIds = $request->input('service_ids');
        $workRu->whereIn('id', $serviceIds)->delete();
        $workEn->whereIn('id', $serviceIds)->delete();
        $workTt->whereIn('id', $serviceIds)->delete();
        return redirect()->route('admin.work.index');
    }
}
