<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblbanksrequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id'=> 'required',
            'name' => 'required:max70',
            'created_at'=> 'timestamp',
            'updated_at'=> 'datetime'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the name!'
        ];
    }
}
