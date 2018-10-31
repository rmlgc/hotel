<?php namespace Refineriaweb\Gallery\Models;

use Model;

/**
 * Model
 */
class Photo extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_gallery_photos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne=[
        'hotel' => [
            'Refineriaweb\Rwstilhotel\Models\Hotel',
        ],
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
