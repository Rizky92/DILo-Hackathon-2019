<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class missions
 * @package App\Models
 * @version August 24, 2019, 8:53 am UTC
 *
 * @property string name
 * @property time length
 * @property int points
 */
class missions extends Model
{
    use SoftDeletes;

    public $table = 'missions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'length',
        'points'
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
