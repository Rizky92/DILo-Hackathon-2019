<?php

namespace App\Http\Requests\API;

use App\Models\tourism_des_cats;
use InfyOm\Generator\Request\APIRequest;

class Createtourism_des_catsAPIRequest extends APIRequest
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
        return tourism_des_cats::$rules;
    }
}