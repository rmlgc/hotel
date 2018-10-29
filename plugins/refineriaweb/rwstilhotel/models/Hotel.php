<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;

/**
 * Model
 */
class Hotel extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_rwstilhotel_hoteles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $hasOne=[
        'setting' => [
            'Keios\Multisite\Models\Setting',
        ]
    ];
    public $hasMany=[
        'room' => [
            'Refineriaweb\Rwstilhotel\Models\Room',
        ]
    ];
    public $belongsToMany = [
        'services' => [
            'Refineriaweb\Rwstilhotel\Models\Service',
            'table' => 'refineriaweb_rwstilhotel_hotel_service',

        ],
    ];
    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
