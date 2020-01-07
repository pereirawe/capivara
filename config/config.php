<?php
    session_start();

    define('APP_VERSION','1.0.0');
    define("APP_DOMAIN", "Capivara");
    
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
    $time_stamp = time();
    
    //define("APP_DEFAULT_ACTION", "index");
    //define("APP_DEFAULT_CONTROLLER", "index");
    // ini_set("session.gc_maxlifetime", 315360000);
    // ini_set("session.cookie_lifetime", 315360000);
    // session_set_cookie_params(315360000);
    // setlocale(LC_ALL,"es_CO");
    // setlocale(LC_MONETARY, 'es_CO');

    
    
    $actual_url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ;

    if( $_SERVER['HTTP_HOST']  == APP_DOMAIN.".test" || $_SERVER['HTTP_HOST']  == "localhost" ){ //Laragon VH Name
        include_once("env/env_local.php");

        $app_url = "http://".$_SERVER['HTTP_HOST']."/" . APP_PATH ;
        echo $app_url;
        
    } else if( $_SERVER['HTTP_HOST']  == APP_DOMAIN.".com"){ // QA & PRODUCTION ENVIROMENT
        if(isset($_SERVER["HTTPS"])){
            $app_url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ;
        } else{
            $app_url = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ;
        }
        include_once("env/env_qa.php");
    }