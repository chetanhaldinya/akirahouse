<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
        if (!request()->is('admin/images/create')) {
            return [
                'title' => 'required|alpha_spaces|max:50|unique:images,title,' .request()->id,
                'description' => 'required|min:10',
                'image' => 'nullable|image',
                'is_active' => 'required',
                'other_images' => 'nullable|max:10',
            ];
        } else {
            return [
                'title' => 'required|alpha_spaces|max:50|unique:flats,title',
                'description' => 'required|min:10',
                'image' => 'nullable|image',    
                'is_active' => 'required',
                'other_images' => 'nullable|max:10',
            ];
        }
    }

    public function messages()
    {
        return [
            'is_active.required' => __('validation.required', ['attribute' => 'status']),
        ];
    }
}
