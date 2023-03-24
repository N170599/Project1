<?php
    switch($action){
        case '':
            require_once('model/product/product_model.php');
            require_once('views/product/main.php');
            ;break;
        case 'create': 
            require_once('model/category/category_model.php');
            require_once('views/product/add.php');//Mới chỉ gọi đến giao diện
            ;break;
        case 'store':
            require_once('model/product/product_model.php');
            require_once('model/product/product_model.php');
            header('location: ?controller='.$controller.'');
            ;break;
        case 'edit':
            require_once('model/product/product_model.php');
            require_once('views/product/edit.php');
            ;break;
        case 'update':
            require_once('model/product/product_model.php');
            header('location: ?controller='.$controller.'');
            ;break;   
        case 'destroy':
            require_once('model/product/product_model.php');
            header('location: ?controller='.$controller.'');
            ;break; 
    }
?>