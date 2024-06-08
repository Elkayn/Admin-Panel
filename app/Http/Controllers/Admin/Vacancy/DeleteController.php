<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Models\VacancyEn;
use App\Models\VacancyRu;
use App\Models\VacancyTt;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(VacancyRu $vacancyRu, VacancyEn $vacancyEn, VacancyTt $vacancyTt){
        $vacancyRu->delete();
        $vacancyEn->where('id', '=', $vacancyRu->id)->delete();
        $vacancyTt->where('id', '=', $vacancyRu->id)->delete();
        return redirect()->route('admin.vacancy.index');
    }

    public function del(Request $request, VacancyRu $vacancyRu, VacancyEn $vacancyEn, VacancyTt $vacancyTt){
        $request->validate([
            'service_ids' => 'required|array',
            'service_ids.*' => 'integer'
        ]);

        $serviceIds = $request->input('service_ids');
        $vacancyRu->whereIn('id', $serviceIds)->delete();
        $vacancyEn->whereIn('id', $serviceIds)->delete();
        $vacancyTt->whereIn('id', $serviceIds)->delete();
        return redirect()->route('admin.vacancy.index');
    }
}
