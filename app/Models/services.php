<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services
 * @package App\Models
 * @version August 24, 2019, 6:36 am UTC
 *
 * @property string name
 * @property string desc
 * @property integer price
 * @property integer isAvailable
 * @property string contact_tel
 * @property string contact_email
 */
class services extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'desc',
        'price',
        'isAvailable',
        'contact_tel',
        'contact_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc' => 'string',
        'price' => 'integer',
        'isAvailable' => 'integer',
        'contact_tel' => 'string',
        'contact_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required',
        'price' => 'required',
        'isAvailable' => 'required',
        'contact_tel' => 'required',
        'contact_email' => 'required'
    ];

    
}
