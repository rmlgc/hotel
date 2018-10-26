<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;

/**
 * Model
 */
class Amenity extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_rwstilhotel_amenities';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
