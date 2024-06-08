<?php

namespace App\Http\Controllers\Admin\Price;

use App\Models\PriceRu;
use App\Models\WorkRu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PriceController extends BaseController
{
    public function __invoke()
    {
        $priceRu = PriceRu::all();

        return view('admin.price.index', compact('priceRu'));
    }
}
