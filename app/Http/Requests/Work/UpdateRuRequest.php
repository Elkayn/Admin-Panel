<?php

namespace App\Http\Requests\Work;

use App\Models\PromoEn;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRuRequest extends FormRequest
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
            'name_workRu' => '',
            'linkRu' => '',
            'imageRu' => 'required'
        ];
    }
}
