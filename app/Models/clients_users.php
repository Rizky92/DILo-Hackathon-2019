<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients_users
 * @package App\Models
 * @version August 24, 2019, 9:29 am UTC
 *
 * @property string username
 * @property string password
 * @property string email
 */
class clients_users extends Model
{
    use SoftDeletes;

    public $table = 'clients_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'username',
        'password',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'username' => 'required',
        'password' => 'required',
        'email' => 'required'
    ];

    
}
