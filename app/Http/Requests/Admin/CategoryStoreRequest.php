<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => ['required'],
            'icon' => ['required', 'mimes:jpg,png,gif,bmp,webp'],
        ];
    }

    public function messages()
    {
        return [
            'icon.required' => 'Background image field is required!',
            'icon.mimes' => 'Only jpg, png, gif, bmp and web are allowed',
        ];
    }
}
