<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportStoreRequest extends FormRequest
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
            'title_spanish' => 'required|string|min:2|max:191',
            'description_spanish' => 'required|string|min:2|max:191',
            'pdf_spanish' => 'required',
            'title_english' => 'required|string|min:2|max:191',
            'description_english' => 'required|string|min:2|max:191',
            'pdf_english' => 'required'
        ];
    }
}
