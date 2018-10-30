<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;
use Backend\Facades\Backend;
use Refineriaweb\RwStilhotel\Models\Amenity;
use Symfony\Component\Routing\RouteCollection;
use Illuminate\Http\Request;
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
//    public $hasMany = [
//        'amenity' => [
//            'refineriaweb\rwstilhotel\Models\RoomAmenity',
//        ],
//    ];
    public $belongsToMany = [
        'amenities' => [
            'refineriaweb\rwstilhotel\Models\Amenity',
            'table'    => 'refineriaweb_rwstilhotel_room_amenity',
            'key'      => 'room_id',
            'otherKey' => 'amenity_id',

        ],
    ];
    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public function beforeCreate()
    {
        $this->hotel_id = post()['hotel_id'];
    }

}
