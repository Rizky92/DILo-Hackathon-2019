<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class products
 * @package App\Models
 * @version August 24, 2019, 6:18 am UTC
 *
 * @property string name
 * @property integer id_prod_cats
 * @property integer price
 * @property integer isAvailable
 * @property string contact_tel
 * @property string contact_email
 */
class products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'id_prod_cats',
        'price',
        'isAvailable',
        'contact_tel',
        'contact_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'id_prod_cats' => 'integer',
        'price' => 'integer',
        'isAvailable' => 'integer',
        'contact_tel' => 'string',
        'contact_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'id_prod_cats' => 'required',
        'price' => 'required',
        'isAvailable' => 'required',
        'contact_tel' => 'required'
    ];

    
}
