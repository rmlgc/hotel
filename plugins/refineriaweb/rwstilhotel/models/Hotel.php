<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;
use Refineriaweb\RwStilhotel\Models\Amenity;
use Refineriaweb\Gallery\Models\Photos;
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
        ],
    ];
    public $hasMany=[
        'room' => [
            'Refineriaweb\Rwstilhotel\Models\Room',
        ],
        'gallery' => [
            'Refineriaweb\Gallery\Models\Photo',
        ],
        'galleryImage' => [
            'Refineriaweb\Gallery\Models\Image',
        ],
        'services' => [
            'Refineriaweb\Rwstilhotel\Models\Service',
        ],
        'galleryCategory' => [
            'Refineriaweb\Gallery\Models\Category',
        ],
    ];
    public $belongsToMany = [

    ];
    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public function scopeHotel($query){
        //dd($query, ',asd', $this->id->get());
        return;
    }
    public function beforeCreate()
    {
        //dd($this);
        //$this->hotel_id = post()['hotel_id'];
    }
}
