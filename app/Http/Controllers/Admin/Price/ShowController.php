<?php

namespace App\Http\Controllers\Admin\Price;

use App\Models\PriceRu;
use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Promo;

class ShowController extends BaseController
{
    public function __invoke(PriceRu $priceRu)
    {
        return view('admin.price.show', compact('priceRu'));
    }
}
