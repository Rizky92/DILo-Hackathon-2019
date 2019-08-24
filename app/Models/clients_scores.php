<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients_scores
 * @package App\Models
 * @version August 24, 2019, 9:33 am UTC
 *
 * @property integer users_id
 * @property int total_points
 */
class clients_scores extends Model
{
    use SoftDeletes;

    public $table = 'clients_scores';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'users_id',
        'total_points'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'users_id' => 'required',
        'total_points' => 'required'
    ];

    
}
