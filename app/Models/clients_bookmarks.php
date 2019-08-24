<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients_bookmarks
 * @package App\Models
 * @version August 24, 2019, 9:38 am UTC
 *
 * @property integer users_id
 * @property integer tourism_id
 * @property string date
 * @property string title
 */
class clients_bookmarks extends Model
{
    use SoftDeletes;

    public $table = 'clients_bookmarks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'users_id',
        'tourism_id',
        'date',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer',
        'tourism_id' => 'integer',
        'date' => 'date',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'users_id' => 'required',
        'tourism_id' => 'required',
        'date' => 'required',
        'title' => 'required'
    ];

    
}
