<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class rewards
 * @package App\Models
 * @version August 24, 2019, 8:55 am UTC
 *
 * @property string name
 * @property int point_cost
 */
class rewards extends Model
{
    use SoftDeletes;

    public $table = 'rewards';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'point_cost'
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
        
    ];

    
}
