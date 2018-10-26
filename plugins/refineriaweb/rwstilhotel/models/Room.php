<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;

/**
 * Model
 */
class Room extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_rwstilhotel_rooms';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $belongsTo = [
        'hotel' => [
            'refineriaweb\rwstilhotel\Models\Hotel',
        ],

    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

}
