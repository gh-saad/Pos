<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserEditRequest extends Request
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
            //
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'contact_no'    => 'required',
            'curr_address'=> 'required',
            'username'      => 'required',
            'role_id'       => 'required',
        ];
    }
}
