<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateEnglishRequest extends FormRequest
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
            'title1_english' => 'required|string|min:2|max:191',
            'content1_english' => 'required|string|min:2|max:191',
            'title2_english' => 'required|string|min:2|max:191',
            'content2_english' => 'required|string|min:2|max:191',
            'title3_english' => 'required|string|min:2|max:191',
            'content3_english' => 'required|string|min:2|max:191',
            'picture1' => 'nullable',
            'picture2' => 'nullable',
            'picture3' => 'nullable'
        ];
    }
}