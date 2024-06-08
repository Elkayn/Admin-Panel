<?php

namespace App\Http\Requests\Promo;

use App\Models\PromoRu;
use Illuminate\Foundation\Http\FormRequest;

class StoreRuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titler' => 'required',
            'subtitler' => 'required',
            'textr' => 'required',
            'subtextr' => 'required',
            'imager' => 'required',
            'linkr' => 'required',
            'sublinkr' => 'required'
        ];
    }
}
