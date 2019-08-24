<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class reports
 * @package App\Models
 * @version August 24, 2019, 6:43 am UTC
 *
 * @property string date
 * @property integer target
 * @property integer achieved
 * @property integer num_of_reservations
 * @property integer num_of_visitors
 * @property integer income_amount
 * @property integer costs
 * @property integer profit
 * @property float margin
 */
class reports extends Model
{
    use SoftDeletes;

    public $table = 'reports';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'date',
        'target',
        'achieved',
        'num_of_reservations',
        'num_of_visitors',
        'income_amount',
        'costs',
        'profit',
        'margin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'target' => 'integer',
        'achieved' => 'integer',
        'num_of_reservations' => 'integer',
        'num_of_visitors' => 'integer',
        'income_amount' => 'integer',
        'costs' => 'integer',
        'profit' => 'integer',
        'margin' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'target' => 'required',
        'achieved' => 'required',
        'num_of_reservations' => 'required',
        'num_of_visitors' => 'required',
        'income_amount' => 'required',
        'costs' => 'required',
        'profit' => 'required',
        'margin' => 'required'
    ];

    
}
