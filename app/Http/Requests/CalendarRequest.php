<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalendarRequest extends Request
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
            'company_id'=>'required',
            'country'=>'required',
            'city'=>'required|min:2|max:25',
            'meeting_with'=>'required|min:2|max:25',
            'type'=>'required|min:2|max:25',
            'meeting_date'=>'required|min:10|max:12',
            'meeting_from_time'=>'required|min:4|max:10',
            'meeting_to_time'=>'required|min:4|max:10',
            'remind_minutes'=>'required|min:4|max:10',

        ];return [
            //
        ];
    }
}
