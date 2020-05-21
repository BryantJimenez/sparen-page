<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateEnglishRequest extends FormRequest
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
            'paragraph1_english' => 'required|string|min:2|max:191',
            'paragraph2_english' => 'required|string|min:2|max:191',
            'list1_english' => 'required|string|min:2|max:191',
            'list2_english' => 'required|string|min:2|max:191',
            'list3_english' => 'required|string|min:2|max:191',
            'picture' => 'nullable'
        ];
    }
}
