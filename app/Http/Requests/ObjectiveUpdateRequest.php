<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjectiveUpdateRequest extends FormRequest
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
            'content1_spanish' => 'required|string|min:2|max:1000',
            'title2_spanish' => 'required|string|min:2|max:191',
            'content2_spanish' => 'required|string|min:2|max:1000',
            'title3_spanish' => 'required|string|min:2|max:191',
            'content3_spanish' => 'required|string|min:2|max:1000',
            'title1_english' => 'required|string|min:2|max:191',
            'content1_english' => 'required|string|min:2|max:1000',
            'title2_english' => 'required|string|min:2|max:191',
            'content2_english' => 'required|string|min:2|max:1000',
            'title3_english' => 'required|string|min:2|max:191',
            'content3_english' => 'required|string|min:2|max:1000',
            'picture' => 'nullable'
        ];
    }
}
