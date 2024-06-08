<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Price\StoreEnRequest;
use App\Http\Requests\Price\StoreRuRequest;
use App\Http\Requests\Price\StoreTtRequest;
use App\Http\Requests\Price\UpdateEnRequest;
use App\Http\Requests\Price\UpdateRuRequest;
use App\Http\Requests\Price\UpdateTtRequest;
use App\Http\Resources\Price\PromoRuResource;
use App\Http\Resources\Price\PromoEnResource;
use App\Http\Resources\Price\PromoTtResource;
use App\Models\PriceEn;
use App\Models\PriceRu;
use App\Models\PriceTt;


class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [PromoRuResource::collection(PriceRu::all()), PromoEnResource::collection(PriceEn::all()), PromoTtResource::collection(PriceTt::all())];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnRequest $request, StoreRuRequest $requestr, StoreTtRequest $requestt)
    {
        $created_promos_en = PromoEn::create($request->validated());

        $created_promos_ru = PromoRu::create($requestr->validated());

        $created_promos_tt = PromoTt::create($requestt->validated());

        return [new PromoRuResource($created_promos_ru), new PromoEnResource($created_promos_en), new PromoTtResource($created_promos_tt)];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [new PromoRuResource(PriceRu::findOrFail($id)), new PromoEnResource(PriceEn::findOrFail($id)), new PromoTtResource(PriceTt::findOrFail($id))];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnRequest $request, PriceEn $priceEn, PriceRu $priceRu, PriceTt $priceTt, UpdateRuRequest $requestr, UpdateTtRequest $requestt)
    {
        $priceRu->update($requestr->validated());
        $priceEn->where('id', '=', $priceRu->id)->update($request->validated());
        $priceTt->where('id', '=', $priceRu->id)->update($requestt->validated());

        return [ new PromoRuResource($priceRu), new PromoEnResource($priceEn->find($priceRu->id)), new PromoTtResource($priceTt->find($priceRu->id))];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceEn $priceEn, PriceRu $priceRu, PriceTt $priceTt)
    {
        $priceRu->delete();
        $priceEn->where('id', '=', $priceRu->id)->delete();
        $priceTt->where('id', '=', $priceRu->id)->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
