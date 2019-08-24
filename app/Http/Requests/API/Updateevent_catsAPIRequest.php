<?php

namespace App\Http\Requests\API;

use App\Models\event_cats;
use InfyOm\Generator\Request\APIRequest;

class Updateevent_catsAPIRequest extends APIRequest
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
        return event_cats::$rules;
    }
}
