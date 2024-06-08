<?php

namespace App\Http\Resources\Price;

use Illuminate\Http\Resources\Json\JsonResource;

class PromoEnResource extends JsonResource
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
            'title' => $this->titleEn,
            'text' => $this->textEn,
            'sum' => $this->sumEn,
            'link' => $this->linkEn,
            'image' => $this->imageEn
        ];
    }
}
