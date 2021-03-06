<?php

namespace App\Repositories;

use App\Models\Faculty;
use App\Repositories\BaseRepository;

/**
 * Class FacultyRepository
 * @package App\Repositories
 * @version September 17, 2021, 11:36 am UTC
*/

class FacultyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Faculty::class;
    }
}
