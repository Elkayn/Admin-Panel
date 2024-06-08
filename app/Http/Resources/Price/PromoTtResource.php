<?php

namespace App\Http\Resources\Price;

use Illuminate\Http\Resources\Json\JsonResource;

class PromoTtResource extends JsonResource
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
            'title' => $this->titleTt,
            'text' => $this->textTt,
            'sum' => $this->sumTt,
            'link' => $this->linkTt,
            'image' => $this->imageTt
        ];
    }
}
