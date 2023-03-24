<?php
switch($action){
    case '': 
        require_once('model/admin/admin_model.php');
        require_once('views/admin/main.php');
        ;break;
    case 'create': 
        require_once('views/admin/add.php');//Mới chỉ gọi đến giao diện
        ;break;
    case 'store':
        require_once('model/admin/admin_model.php');
        header('location: ?controller='.$controller.'');
        ;break;
    case 'edit':
        require_once('model/admin/admin_model.php');
        require_once('views/admin/edit.php');
        ;break;
    case 'update':
        require_once('model/admin/admin_model.php');
        header('location: ?controller='.$controller.'');
        ;break;
    case 'destroy':
        require_once('model/admin/admin_model.php');
        header('location: ?controller='.$controller.'');
        ;break; 

}
?>