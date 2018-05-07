<?php


class Autoloader {

    public static function register () {
        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];
        define('ROOT', $root.'/blog/');
        define('HOST', 'http://'.$host.'/blog/');
        define('CONTROLLER', ROOT.'App/Controller/');
        define('VIEW', ROOT.'Views/');
        define('APP', ROOT.'App/');
        define('MODEL', ROOT.'App/Model/');
        define('MANAGER', ROOT.'App/Manager/');
        define('ASSETS', HOST.'public/');
    }

    public static function autoload ($className) {
//        var_dump($className);
        if (file_exists(CONTROLLER . $className .'.php')){
            include_once (CONTROLLER . $className.'.php');
        }
        elseif (file_exists(APP . $className.'.php')){
            include_once (APP . $className.'.php');
        }
        elseif (file_exists(MODEL . $className.'.php')){
            include_once MODEL . $className.'.php';
        }
        elseif (file_exists(MANAGER . $className.'.php')){
            include_once MANAGER . $className.'.php';
        }
    }
}