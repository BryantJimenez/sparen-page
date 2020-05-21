<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email|min:5|max:191|unique:users,email',
            'dni' => 'nullable|string|min:5|max:191',
            'address' => 'required|string|min:5|max:191',
            'phone' => 'nullable|string|min:5|max:15'
        ];
    }
}
