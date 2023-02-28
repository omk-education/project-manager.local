<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'priority' => 'required|integer|between:0,500'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Введите название задачи',
            'description.required' => 'Введите описание задачи',
            'priority.required' => 'Введите приоритет задачи',
            'priority.integer' => 'Приоритет задачи должен быть целым числом',
            'priority.between' => 'Приоритет задачи должен быть от :min до :max',
        ];
    }
}
