<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faculty
 * @package App\Models
 * @version September 17, 2021, 11:36 am UTC
 *
 * @property string $Lastname
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Birthdate
 * @property string $Gender
 * @property string $Address
 * @property string $Citizenship
 * @property string $Religion
 * @property string $Subject
 */
class Faculty extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'faculty';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Lastname',
        'Firstname',
        'Middlename',
        'Birthdate',
        'Gender',
        'Address',
        'Citizenship',
        'Religion',
        'Subject'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Lastname' => 'string',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Birthdate' => 'date',
        'Gender' => 'string',
        'Address' => 'string',
        'Citizenship' => 'string',
        'Religion' => 'string',
        'Subject' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Lastname' => 'nullable|string|max:50',
        'Firstname' => 'nullable|string|max:50',
        'Middlename' => 'nullable|string|max:50',
        'Birthdate' => 'nullable',
        'Gender' => 'nullable|string|max:12',
        'Address' => 'nullable|string|max:500',
        'Citizenship' => 'nullable|string|max:50',
        'Religion' => 'nullable|string|max:50',
        'Subject' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
