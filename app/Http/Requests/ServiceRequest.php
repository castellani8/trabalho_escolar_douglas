<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'fleet_id'            => 'int|required',
            'service_desc'        => 'string|required',
            'service_type_id'     => 'int|required',
            'maintenance_type_id' => 'int|required'  
        ];
    }
}
