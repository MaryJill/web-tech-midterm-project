<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PetShop
 * @package App\Models
 * @version October 25, 2021, 5:28 am UTC
 *
 * @property string $store_name
 * @property string $store_owner
 * @property string $pets
 * @property string $breed
 * @property number $price
 */
class PetShop extends Model
{

    use HasFactory;

    public $table = 'petshop';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'store_name',
        'store_owner',
        'pets',
        'breed',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'store_name' => 'string',
        'store_owner' => 'string',
        'pets' => 'string',
        'breed' => 'string',
        'price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'store_name' => 'required|string|max:255',
        'store_owner' => 'required|string|max:255',
        'pets' => 'required|string|max:255',
        'breed' => 'required|string|max:255',
        'price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
