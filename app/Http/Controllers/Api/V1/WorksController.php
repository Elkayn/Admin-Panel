<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Work\StoreRuRequest;
use App\Http\Requests\Work\StoreTtRequest;
use App\Http\Requests\Work\UpdateEnRequest;
use App\Http\Requests\Work\UpdateRuRequest;
use App\Http\Requests\Work\UpdateTtRequest;
use App\Http\Requests\Work\StoreEnRequest;
use App\Http\Resources\Work\WorkEnResource;
use App\Http\Resources\Work\WorkRuResource;
use App\Http\Resources\Work\WorkTtResource;
use App\Models\WorkRu;
use App\Models\WorkEn;
use App\Models\WorkTt;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [WorkRuResource::collection(WorkRu::all()), WorkEnResource::collection(WorkEn::all()), WorkTtResource::collection(WorkTt::all())];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRuRequest $requestRu, StoreEnRequest $requestEn, StoreTtRequest $requestTt)
    {
        $created_promos_en = WorkEn::create($requestEn->validated());

        $created_promos_ru = WorkRu::create($requestRu->validated());

        $created_promos_tt = WorkTt::create($requestTt->validated());

        return [new WorkRuResource($created_promos_ru), new WorkEnResource($created_promos_en), new WorkTtResource($created_promos_tt)];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [new WorkRuResource(WorkRu::findOrFail($id)), new WorkEnResource(WorkEn::findOrFail($id)), new WorkTtResource(WorkTt::findOrFail($id))];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRuRequest $requestRu, WorkRu $workRu, WorkEn $workEn, WorkTt $workTt, UpdateEnRequest $requestEn, UpdateTtRequest $requestTt)
    {
        $workRu->update($requestRu->validated());
        $workEn->where('id', '=', $workRu->id)->update($requestEn->validated());
        $workTt->where('id', '=', $workRu->id)->update($requestTt->validated());

        return [new WorkRuResource($workRu->find($workRu->id)), new WorkEnResource($workEn->find($workRu->id)), new WorkTtResource($workTt->find($workRu->id))];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkEn $workEn, WorkRu $workRu, WorkTt $workTt)
    {
        $workRu->delete();
        $workEn->where('id', '=', $workRu->id)->delete();
        $workTt->where('id', '=', $workRu->id)->delete();

        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
