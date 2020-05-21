<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultancyUpdateSpanishRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title1_spanish' => 'required|string|min:2|max:191',
            'content1_spanish' => 'required|string|min:2|max:191',
            'title2_spanish' => 'required|string|min:2|max:191',
            'content2_spanish' => 'required|string|min:2|max:191',
            'title3_spanish' => 'required|string|min:2|max:191',
            'content3_spanish' => 'required|string|min:2|max:191',
            'picture' => 'nullable'
        ];
    }
}
