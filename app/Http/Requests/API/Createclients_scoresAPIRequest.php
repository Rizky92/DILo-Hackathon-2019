<?php

namespace App\Http\Requests\API;

use App\Models\clients_scores;
use InfyOm\Generator\Request\APIRequest;

class Createclients_scoresAPIRequest extends APIRequest
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
        return clients_scores::$rules;
    }
}
