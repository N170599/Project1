<?php
    switch($action){
        case '':
            require_once('model/category/category_model.php');
            require_once('views/category/main.php');
            ;break;
        case 'create': 
            require_once('views/category/add.php');//Mới chỉ gọi đến giao diện
            ;break;
        case 'store':
            require_once('model/category/category_model.php');
            header('location: index.php?controller=category');
            ;break;
        case 'edit':
            require_once('model/category/category_model.php');
            require_once('views/category/edit.php');
            ;break;
        case 'update':
            require_once('model/category/category_model.php');
            header('location: index.php?controller=category');
            ;break;   
        case 'destroy':
            require_once('model/category/category_model.php');
            header('location: ?controller='.$controller.'');
            ;break; 
    }
?>