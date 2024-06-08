<?php

namespace App\Http\Resources\Price;

use Illuminate\Http\Resources\Json\JsonResource;

class PromoRuResource extends JsonResource
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
            'title' => $this->titleRu,
            'text' => $this->textRu,
            'sum' => $this->sumRu,
            'link' => $this->linkRu,
            'image' => $this->imageRu
        ];
    }
}
