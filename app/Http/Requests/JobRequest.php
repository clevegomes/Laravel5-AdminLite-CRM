<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobRequest extends Request
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
            'job_title'=>'required|max:25|min:2',
            'country'=>'required',
            'city'=>'required|min:2|max:25',
            'sector'=>'required|min:2|max:25',
            'url_on_bloovo'=>'required|min:10|max:25',
            'opening_closing_date'=>'required|min:10|max:25',

        ];
    }
}
