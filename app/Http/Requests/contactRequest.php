<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class contactRequest extends Request
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
        return [
            'contact_name' => 'required|min:4|max:25',
            'contact_number' => 'required|min:11|max:16',
            'contact_email'  => 'email'
        ];
    }
    
}
