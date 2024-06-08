<?php

namespace App\Http\Resources\Promo;

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
            'title' => $this->titler,
            'subtitle' => $this->subtitler,
            'text' => $this->textr,
            'subtext' => $this->subtextr,
            'image' => $this->imager,
            'link' => $this->linkr,
            'sublink' => $this->sublinkr
        ];
    }
}
