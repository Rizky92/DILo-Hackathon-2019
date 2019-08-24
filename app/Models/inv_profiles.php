<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class inv_profiles
 * @package App\Models
 * @version August 24, 2019, 9:04 am UTC
 *
 * @property string name
 * @property string desc_profile
 * @property string address
 * @property string owner
 * @property string coords
 * @property string email
 * @property string telp
 */
class inv_profiles extends Model
{
    use SoftDeletes;

    public $table = 'inv_profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'desc_profile',
        'address',
        'owner',
        'coords',
        'email',
        'telp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc_profile' => 'string',
        'address' => 'string',
        'owner' => 'string',
        'coords' => 'string',
        'email' => 'string',
        'telp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
