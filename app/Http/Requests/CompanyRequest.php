<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => 'string|required',
            'segment'      => 'string|required',
            'address'      => 'string|required',
            'city'         => 'string|required',
            'state'        => 'string|max:2|required',
            'postal_code'  => 'string|required'
        ];
    }
}
