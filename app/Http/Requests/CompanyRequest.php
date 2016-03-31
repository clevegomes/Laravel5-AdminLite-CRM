<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyRequest extends Request
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
	        'company_name'=>'required|alpha_num|max:25|min:2',
	        'country'=>'required',
	        'city'=>'required|min:2|max:25',
	        'sector'=>'required|min:2|max:25',
	        'phone'=>'required|min:2|max:15',
	        'email'=>'required|email',
	        'website'=>'required|min:10|max:25',
	        'profile_url'=>'required|min:2|max:25',
	        'contact_person'=>'required|min:2|max:25',
	        'contact_phone'=>'required|min:2|max:25',
	        'contact_mobile'=>'required|min:2|max:25',
	        'contact_email'=>'required|email',
	        'comments'=>'required|min:10|max:550',

        ];
    }
}
