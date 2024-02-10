<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        if (!request()->is('admin/teams/create')) {
            return [
                'name' => 'required|alpha_spaces|max:40',
                'image' => 'nullable|image',
                'position' => 'required|max:25',
                'is_active' => 'required',
            ];
        } else {
            return [
                'name' => 'required|alpha_spaces|max:40',
                'image' => 'required|image',
                'position' => 'required|max:25',
                'is_active' => 'required',
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
