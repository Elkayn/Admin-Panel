<?php

namespace App\Http\Resources\Work;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkTtResource extends JsonResource
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
            'name_work' => $this->name_workTt,
            'link' => $this->linkTt,
            'image' => $this->imageTt,
        ];
    }
}
