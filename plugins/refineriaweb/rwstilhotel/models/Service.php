<?php namespace Refineriaweb\RwStilhotel\Models;

use Model;
use Refineriaweb\RwStilhotel\Models\hotel;
use Refineriaweb\RwStilhotel\Models\hotelService;
/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'refineriaweb_rwstilhotel_services';

    /**
     * @var array Validation rules
     */

    public $belongsTo = [
        'hotel' => [
            'Refineriaweb\Rwstilhotel\Models\HotelService',
        ],
    ];
    public $belongsToMany = [

    ];
    public $attachMany = [
        'images' => 'System\Models\File'
    ];
    public $rules = [
    ];
    public function scopeHotel($query, $hotel){
        //dd($e->id, $query->get(), $this->get());
         return $query->where('hotel_id',$hotel->id)->get();
    }
    public function beforeCreate()
    {
        //dd($this);
       // $this->hotel_id = post()['hotel_id'];
    }
}
