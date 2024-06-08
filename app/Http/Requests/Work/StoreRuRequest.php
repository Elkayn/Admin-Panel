<?php

namespace App\Http\Requests\Work;

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
            'name_workRu' => 'required',
            'linkRu' => 'required',
            'imageRu' => 'required'
        ];
    }
}
