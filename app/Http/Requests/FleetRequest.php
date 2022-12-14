<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FleetRequest extends FormRequest
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
                'company_id' => 'string|required',
                'desc_frota' => 'string|required',
                'active'     => 'int|required',
                'hystory'    => 'string|required',
                'dt_manut'   => 'date|required'
        ];
    }
}





