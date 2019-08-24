<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients_profiles
 * @package App\Models
 * @version August 24, 2019, 9:30 am UTC
 *
 * @property string nama
 * @property string tgl_lahir
 * @property string jk
 * @property string alamat
 * @property string no_hp
 * @property string email
 */
class clients_profiles extends Model
{
    use SoftDeletes;

    public $table = 'clients_profiles';
    

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
