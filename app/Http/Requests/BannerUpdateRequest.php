<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdateRequest extends FormRequest
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
            'banner1_english' => 'required|string|min:2|max:191',
            'banner2_english' => 'required|string|min:2|max:191',
            'banner3_english' => 'required|string|min:2|max:191',
            'banner1_spanish' => 'required|string|min:2|max:191',
            'banner2_spanish' => 'required|string|min:2|max:191',
            'banner3_spanish' => 'required|string|min:2|max:191',
            'picture1' => 'nullable',
            'picture2' => 'nullable',
            'picture3' => 'nullable'
        ];
    }
}
