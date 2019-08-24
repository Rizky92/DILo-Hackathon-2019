<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tourism_events
 * @package App\Models
 * @version August 24, 2019, 10:17 am UTC
 *
 * @property string name
 * @property integer id_event_cats
 * @property string desc
 * @property string event_holder
 * @property string event_holder_tel
 * @property string event_holder_email
 * @property string date_start
 * @property string date_end
 * @property time time_start
 * @property time time_end
 * @property integer isDays
 * @property int quota
 * @property integer rundown_id
 * @property integer tourism_id
 */
class tourism_events extends Model
{
    use SoftDeletes;

    public $table = 'tourism_events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'id_event_cats',
        'desc',
        'event_holder',
        'event_holder_tel',
        'event_holder_email',
        'date_start',
        'date_end',
        'time_start',
        'time_end',
        'isDays',
        'quota',
        'rundown_id',
        'tourism_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'id_event_cats' => 'integer',
        'desc' => 'string',
        'event_holder' => 'string',
        'event_holder_tel' => 'string',
        'event_holder_email' => 'string',
        'date_start' => 'date',
        'date_end' => 'date',
        'isDays' => 'integer',
        'rundown_id' => 'integer',
        'tourism_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
