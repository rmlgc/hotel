<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;

/**
 * Model
 */
class HotelService extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_rwstilhotel_hotel_service';

    public $belongsTo = [
        'hotel' => [
            'Refineriaweb\Rwstilhotel\Models\Service',
        ],
        'service' => [
            'Refineriaweb\Rwstilhotel\Models\Hotel',
        ],

    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
