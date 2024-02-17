<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        if (!request()->is('admin/blogs/create')) {
            return [
                'is_active' => 'required',
                'title' => 'required',
                'meta_title' => 'required',
                'image' => 'nullable|image',
                'description' => 'required',
                'meta_description' => 'required',
                
            ];
        } else {
            return [
                'is_active' => 'required',
                'title' => 'required|required',
                'meta_title' => 'required|meta_title',
                'image' => 'required|image',
                'description' => 'required|description',
                'meta_description' => 'required|meta_description',
                
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
