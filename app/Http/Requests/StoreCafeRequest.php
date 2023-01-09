<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCafeRequest extends FormRequest
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
            'name' => 'required|string',
            'address' => 'required',
            'city' => 'required|string',
            'phone' => 'required|integer',
            'from' => 'required|integer|digits_between:0,6',
            'till' => 'required|integer|digits_between:0,6',
            'times' => 'required',
            'url' => 'required|string'
        ];
    }
}
