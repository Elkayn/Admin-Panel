<?php

namespace App\Http\Requests\Promo;

use App\Models\PromoRu;
use Illuminate\Foundation\Http\FormRequest;

class StoreTtRequest extends FormRequest
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
            'titlet' => 'required',
            'subtitlet' => 'required',
            'textt' => 'required',
            'subtextt' => 'required',
            'imaget' => 'required',
            'linkt' => 'required',
            'sublinkt' => 'required'
        ];
    }
}
