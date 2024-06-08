<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promo\StoreRequest;
use App\Http\Requests\Promo\StoreRuRequest;
use App\Http\Requests\Promo\StoreTtRequest;
use App\Http\Requests\Promo\UpdateEnRequest;
use App\Http\Requests\Promo\UpdateRuRequest;
use App\Http\Requests\Promo\UpdateTtRequest;
use App\Http\Resources\Promo\PromoRuResource;
use App\Http\Resources\Promo\PromoEnResource;
use App\Http\Resources\Promo\PromoTtResource;
use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;

class PromosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [PromoEnResource::collection(PromoEn::all()), PromoRuResource::collection(PromoRu::all()), ServiceTtResource::collection(PromoTt::all())];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, StoreRuRequest $requestr, StoreTtRequest $requestt)
    {
        $created_promos_en = PromoEn::create($request->validated());

        $created_promos_ru = PromoRu::create($requestr->validated());

        $created_promos_tt = PromoTt::create($requestt->validated());

        return [new PromoEnResource($created_promos_en), new PromoRuResource($created_promos_ru), new PromoTtResource($created_promos_tt)];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [new PromoEnResource(PromoEn::findOrFail($id)), new PromoRuResource(PromoRu::findOrFail($id)), new PromoTtResource(PromoTt::findOrFail($id))];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnRequest $request, PromoEn $promo, PromoRu $promor, PromoTt $promot, UpdateRuRequest $requestr, UpdateTtRequest $requestt)
    {
        $promo->update($request->validated());
        $promor->where('id', '=', $promo->id)->update($requestr->validated());
        $promot->where('id', '=', $promo->id)->update($requestt->validated());

        return [new PromoEnResource($promo), new PromoRuResource($promor->find($promo->id)), new PromoTtResource($promot->find($promo->id))];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoEn $promo, PromoRu $promor, PromoTt $promot, Promo $prom)
    {
        $promo->delete();
        $promor->where('id', '=', $promo->id)->delete();
        $promot->where('id', '=', $promo->id)->delete();
        $prom->where('id', '=', $promo->id)->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
