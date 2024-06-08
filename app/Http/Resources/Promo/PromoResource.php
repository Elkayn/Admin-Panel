<?php

namespace App\Http\Resources\Promo;

use App\Http\Requests\Promo\StoreIdRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class PromoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'promo_ru_id' => $this->promo_ru_id,
            'promo_en_id' => $this->promo_en_id,
            'promo_tt_id' => $this->promo_tt_id,
        ];
    }
}
