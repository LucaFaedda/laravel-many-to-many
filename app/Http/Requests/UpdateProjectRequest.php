<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
Use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:10', Rule::unique('projects')->ignore($this->project) ],
            'data_progetto' => ['nullable'],
            'difficoltÃ ' => ['required'],
            'descrizione' => ['nullable'],
            'technology_id' => ['exists:technologies,id']
        ];
    }
}
