<?php
session_start();
require 'smarty.config.php';
require $rootPath.'application/classes/user.php';
require 'database.connect.php';
$smarty->template_dir = $rootPath.'application/templates/adminpanel';
$user = new User($DBConnect,session_id());
$data =[
    "title"=>"Прокат автомобилей",
    "name"=>[
        "nav"=>"Админ панель"
    ],
    "nav"=>[
        "Главная"=>"/cars/admin"
    ],
    "navDropDown"=>[
        "Машины"=>"/cars/admin/cars"
    ]
];

$smarty->assign("data",$data);

/**
 * @param $response
 * @return mixed|string
 * @TODO Add Permission denied page
 */
function getPage($response){
    $pages = [
        "index"=>"main.tpl",
        "add"=>"add.tpl",
        "view"=>"view.tpl",
        "auth"=>"login.tpl",
        "cars"=>"cars.tpl"
    ];
    global $user;
    if (!$user->havePerm("adminpanel")){
        $response['temp'] = 'auth';
    }else {
        $response['temp'] = $response['temp'] ?? 'index';
    }
    return $pages[$response['temp']] ?? "404.tpl";
}

