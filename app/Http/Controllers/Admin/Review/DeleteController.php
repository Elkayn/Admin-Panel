<?php

namespace App\Http\Controllers\Admin\Review;


use App\Models\ReviewEn;
use App\Models\ReviewRu;
use App\Models\ReviewTt;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(ReviewRu $reviewRu, ReviewEn $reviewEn, ReviewTt $reviewTt){
        $reviewRu->delete();
        $reviewEn->where('id', '=', $reviewRu->id)->delete();
        $reviewTt->where('id', '=', $reviewRu->id)->delete();
        return redirect()->route('admin.review.index');
    }

    public function del(Request $request, ReviewRu $reviewRu, ReviewEn $reviewEn, ReviewTt $reviewTt){
        $request->validate([
            'service_ids' => 'required|array',
            'service_ids.*' => 'integer'
        ]);

        $serviceIds = $request->input('service_ids');
        $reviewRu->whereIn('id', $serviceIds)->delete();
        $reviewEn->whereIn('id', $serviceIds)->delete();
        $reviewTt->whereIn('id', $serviceIds)->delete();
        return redirect()->route('admin.review.index');
    }
}
