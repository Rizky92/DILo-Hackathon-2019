<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class event_committee
 * @package App\Models
 * @version August 24, 2019, 8:44 am UTC
 *
 * @property string name
 * @property string role
 * @property string tel
 * @property string email
 */
class event_committee extends Model
{
    use SoftDeletes;

    public $table = 'event_committees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'role',
        'tel',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'string',
        'tel' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
