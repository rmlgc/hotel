<?php namespace Refineriaweb\RwStilhotel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Services extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Refineriaweb.RwStilhotel', 'main-menu-hotel', 'side-menu-services');
    }
    public function index($hotelId = null)
    {
        $this->asExtension('ListController')->index();
    }
    public function listExtendQuery($query)
    {
        dd($query->get());
//        if ($user->hasAccess('radiantweb.helpdesk.access_helpdesk_all_tickets'))
//        {
//            $uID = $user->id;
//            $query->where('assigned_to', '=', $user->id);
//        }
    }
}
