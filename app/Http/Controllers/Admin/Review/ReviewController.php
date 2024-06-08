<?php

namespace App\Http\Controllers\Admin\Review;

use App\Models\PriceRu;
use App\Models\ReviewRu;
use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ReviewController extends BaseController
{
    public function __invoke()
    {
        $reviewRu = ReviewRu::all();

        return view('admin.review.index', compact('reviewRu'));
    }
}
