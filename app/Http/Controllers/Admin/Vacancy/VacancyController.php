<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Models\PriceRu;
use App\Models\ReviewRu;
use App\Models\VacancyRu;
use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VacancyController extends BaseController
{
    public function __invoke()
    {
        $vacancyRus = VacancyRu::all();

        return view('admin.vacancy.index', compact('vacancyRus'));
    }
}
