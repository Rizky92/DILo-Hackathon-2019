<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tourism_des_cats
 * @package App\Models
 * @version August 24, 2019, 6:07 am UTC
 *
 * @property string name
 */
class tourism_des_cats extends Model
{
    use SoftDeletes;

    public $table = 'tourism_des_cats';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
