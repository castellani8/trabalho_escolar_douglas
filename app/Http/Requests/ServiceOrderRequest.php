<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceOrderRequest extends FormRequest
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
            'order_date'                   => 'date|required',
            'service_id'                   => 'int|required',
            'delivery_date'                => 'date|required',
            'order_id'                     => 'int|required',
            'fleet_id'                     => 'int|required',
            'maintenance_type_id'          => 'int|required'
        ];
    }
}
