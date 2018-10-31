<?php namespace Refineriaweb\RwStilhotel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Keios\Multisite\Models\Setting;

class Hotels extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Refineriaweb.RwStilhotel', 'main-menu-hotel');
    }

    public function boot()
    {
        //dd('asd');
        //Beach::extend(function($model){
         //   $model->bindEvent['ProductCategory'] = ['technobrave\productcategory\Models\ProductCategory'];
        //});
    }
    public function index($hotelId = null)
    { //dd('asd');
        $this->asExtension('ListController')->index();
    }
    public function listExtendQuery($query)
    {
        //dd($query->get());
//       if ($user->hasAccess('radiantweb.helpdesk.access_helpdesk_all_tickets'))
//        {
//            $uID = $user->id;
//            $query->where('assigned_to', '=', $user->id);
//        }
    }
}
