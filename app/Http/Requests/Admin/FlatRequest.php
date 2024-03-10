<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FlatRequest extends FormRequest
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
        if (!request()->is('admin/flats/create')) {
            return [
                'title' => 'required|alpha_spaces|max:50|unique:flats,title,' .request()->id,
                'amount' => 'required|integer|max:15000000',
                'image' => 'nullable|image',
                'size' => 'required|max:15',
                'bed_room' => 'required|integer|max:20',
                'bath_room' => 'required|integer|max:10',
                'max_guest' => 'required|integer|max:30',
                'youtube_url' => 'required|url|max:250',
                'short_description' => 'required|min:10',
                'long_description' => 'required|min:10',
                'is_active' => 'required',
                'other_images' => 'nullable|max:10',
                'location' => 'required|max:255',
            ];
        } else {
            return [
                'title' => 'required|alpha_spaces|max:50|unique:flats,title',
                'amount' => 'required|integer|max:15000000',
                'image' => 'nullable|image',
                'size' => 'required|max:15',
                'bed_room' => 'required|integer|max:20',
                'bath_room' => 'required|integer|max:10',
                'max_guest' => 'required|integer|max:30',
                'youtube_url' => 'required|url|max:250',
                'short_description' => 'required|min:10',
                'long_description' => 'required|min:10',
                'is_active' => 'required',
                'other_images' => 'nullable|max:10',
                'location' => 'required|max:255',
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
