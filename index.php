<?php

$base_url = $_SERVER['REQUEST_SCHEME'] .'://' . $_SERVER['SERVER_NAME'] . '/'. basename( dirname( __FILE__ ) );
define( 'BASE_URL', $base_url );
define( 'BASE_DIR', dirname( __FILE__ ) );

$controller = 'Sach';
$action = 'Danhsach';
$param = $param2 = '';

if( isset( $_GET['controller'] ) && $_GET['controller'] != '' ){
    $controller = $_GET['controller'];
}

if( isset( $_GET['action'] ) && $_GET['action'] != '' ){
    $action = $_GET['action'];
}

if( isset( $_GET['param'] ) && $_GET['param'] != '' ){
    $param = $_GET['param'];
}

if( isset( $_GET['param2'] ) && $_GET['param2'] != '' ){
    $param2 = $_GET['param2'];
}

$controller_name = $controller.'Controller';

$controller_filename = "Controllers/{$controller}Controller.php";
$model_filename      = "Models/{$controller}Model.php";

if( file_exists( $model_filename ) ){
    require_once( $model_filename );
}

if( file_exists( $controller_filename ) ){
    require_once( $controller_filename );
    $instance_controller = new $controller_name();
    
    if( method_exists( $instance_controller, $action ) ){
        
        if( $param != '' && $param2 == '' ){
            $instance_controller->$action( $param );
        }elseif( $param != '' && $param2 != '' ){
            $instance_controller->$action( $param, $param2 );
        }else{
            $instance_controller->$action( );
        }
    }
    
}

