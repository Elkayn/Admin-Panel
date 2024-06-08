<?php

namespace App\Http\Resources\Promo;

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
            'title' => $this->titlet,
            'subtitle' => $this->subtitlet,
            'text' => $this->textt,
            'subtext' => $this->subtextt,
            'image' => $this->imaget,
            'link' => $this->linkt,
            'sublink' => $this->sublinkt
        ];
    }
}
