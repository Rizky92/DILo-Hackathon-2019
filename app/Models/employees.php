<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class employees
 * @package App\Models
 * @version August 24, 2019, 6:37 am UTC
 *
 * @property string nama
 * @property string tgl_lahir
 * @property string jk
 * @property string alamat
 * @property string no_hp
 * @property string email
 */
class employees extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'tgl_lahir',
        'jk',
        'alamat',
        'no_hp',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'tgl_lahir' => 'date',
        'jk' => 'string',
        'alamat' => 'string',
        'no_hp' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'tgl_lahir' => 'required',
        'jk' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'email' => 'required'
    ];

    
}
