<?php

namespace Gkiokan\Company\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'alpha_spaces|required|min:3',
            'owner'     => 'alpha_spaces|required|min:5',
            'hr'        => 'alpha_spaces',

            'street'=> 'alpha_spaces',
            'plz'   => 'numeric',
            'city'  => 'alpha_spaces',
            'state' => 'alpha_spaces',
            'country' => 'alpha_spaces',

            'tel'   => 'alpha_spaces',
            'fax'   => 'alpha_spaces',
            'email_info'   => 'email',
            'email_support'=> 'email'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
