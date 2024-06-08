<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreRuRequest;
use App\Http\Requests\Service\StoreTtRequest;
use App\Http\Requests\Service\UpdateEnRequest;
use App\Http\Requests\Service\UpdateRuRequest;
use App\Http\Requests\Service\UpdateTtRequest;
use App\Http\Requests\Service\StoreEnRequest;
use App\Http\Resources\Service\ServiceEnResource;
use App\Http\Resources\Service\ServiceRuResource;
use App\Http\Resources\Service\ServiceTtResource;
use App\Models\Promo;
use App\Models\PromoEn;
use App\Models\PromoRu;
use App\Models\PromoTt;
use App\Models\Service;
use App\Models\ServiceEn;
use App\Models\ServiceTt;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [ServiceRuResource::collection(Service::all()), ServiceEnResource::collection(ServiceEn::all()), ServiceTtResource::collection(ServiceTt::all())];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRuRequest $requestRu, StoreEnRequest $requestEn, StoreTtRequest $requestTt)
    {
        $created_promos_en = ServiceEn::create($requestEn->validated());

        $created_promos_ru = Service::create($requestRu->validated());

        $created_promos_tt = ServiceTt::create($requestTt->validated());

        return [new ServiceRuResource($created_promos_ru), new ServiceEnResource($created_promos_en), new ServiceTtResource($created_promos_tt)];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [new ServiceRuResource(Service::findOrFail($id)), new ServiceEnResource(ServiceEn::findOrFail($id)), new ServiceTtResource(ServiceTt::findOrFail($id))];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRuRequest $request, ServiceEn $serviceEn, Service $service, ServiceTt $serviceTt, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt)
    {
        $service->update($request->validated());
        $serviceEn->where('id', '=', $service->id)->update($requestEn->validated());
        $serviceTt->where('id', '=', $service->id)->update($requestTt->validated());

        return [new ServiceRuResource($service), new ServiceEnResource($serviceEn->find($service->id)), new ServiceTtResource($serviceTt->find($service->id))];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceEn $serviceEn, Service $service, ServiceTt $serviceTt)
    {
        $service->delete();
        $serviceEn->where('id', '=', $service->id)->delete();
        $serviceTt->where('id', '=', $service->id)->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
