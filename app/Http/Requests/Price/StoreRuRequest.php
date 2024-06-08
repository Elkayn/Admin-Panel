<?php

namespace App\Http\Requests\Price;

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
            'titleRu' => 'required',
            'textRu' => 'required',
            'sumRu' => 'required',
            'linkRu' => 'required',
            'imageRu' => 'required',
        ];
    }
}
