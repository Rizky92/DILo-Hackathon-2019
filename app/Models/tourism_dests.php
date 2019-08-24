<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tourism_dests
 * @package App\Models
 * @version August 24, 2019, 6:13 am UTC
 *
 * @property string name
 * @property string desc
 * @property string address
 * @property string owner
 * @property integer id_des_cats
 * @property string coords
 * @property string email
 * @property string tel
 */
class tourism_dests extends Model
{
    use SoftDeletes;

    public $table = 'tourism_dests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'desc',
        'address',
        'owner',
        'id_des_cats',
        'coords',
        'email',
        'tel'
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
        'address' => 'string',
        'owner' => 'string',
        'id_des_cats' => 'integer',
        'coords' => 'string',
        'email' => 'string',
        'tel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'desc' => 'required',
        'address' => 'required',
        'owner' => 'required',
        'id_des_cats' => 'required',
        'email' => 'required',
        'tel' => 'required'
    ];

    
}
