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
                'title' => 'required|alpha_spaces|max:80|unique:blogs,title,' .request()->id,
                'image' => 'nullable|image',
                'description' => 'required|min:10',
                'is_active' => 'required',
                'other_images' => 'nullable|max:10',
            ];
        } else {
            return [
                'title' => 'required|alpha_spaces|max:80|unique:blogs,title',
                'image' => 'required|image',
                'description' => 'required|min:10',
                'is_active' => 'required',
                'other_images' => 'required|max:10',
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
