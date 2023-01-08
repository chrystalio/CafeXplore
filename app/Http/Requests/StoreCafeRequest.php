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
            'phone' => 'required|numberic',
            'from' => 'required|string',
            'till' => 'required|string',
            'times' => 'required',
            'social_media' => 'required|string'
        ];
    }
}
