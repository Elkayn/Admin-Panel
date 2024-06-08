<?php

namespace App\Http\Resources\Work;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkEnResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_work' => $this->name_workEn,
            'link' => $this->linkEn,
            'image' => $this->imageEn,
        ];
    }
}
