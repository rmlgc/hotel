<?php namespace Refineriaweb\Gallery\Models;

use Model;

/**
 * Model
 */
class Image extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_gallery_images';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $belongsTo=[
        'category' => [
            'Refineriaweb\Gallery\Models\Category',
        ],
    ];
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
