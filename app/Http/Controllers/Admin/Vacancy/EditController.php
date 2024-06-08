<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Models\PriceEn;
use App\Models\PriceRu;
use App\Models\PriceTt;
use App\Models\Promo;
use App\Models\ReviewEn;
use App\Models\ReviewRu;
use App\Models\ReviewTt;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;
use App\Models\VacancyEn;
use App\Models\VacancyRu;
use App\Models\VacancyTt;
use App\Models\WorkEn;
use App\Models\WorkRu;
use App\Models\WorkTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends BaseController
{
    public function __invoke(VacancyRu $vacancyRu)
    {
        $vacancyEn = VacancyEn::all();
        $vacancyTt = VacancyTt::all();
        return view('admin.vacancy.edit', compact('vacancyRu', 'vacancyEn', 'vacancyTt'));
    }
}
