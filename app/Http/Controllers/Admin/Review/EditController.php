<?php

namespace App\Http\Controllers\Admin\Review;

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
use App\Models\WorkEn;
use App\Models\WorkRu;
use App\Models\WorkTt;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EditController extends BaseController
{
    public function __invoke(ReviewRu $reviewRu)
    {
        $reviewEn = ReviewEn::all();
        $reviewTt = ReviewTt::all();
        return view('admin.review.edit', compact('reviewRu', 'reviewEn', 'reviewTt'));
    }
}
