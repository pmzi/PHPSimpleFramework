<?php

use app\Controllers;

class Router{

    const controllerNamespace = '\\app\\Controllers\\';

    private static $controller;

    private static $method;

    private static $params;

    public static function handle($url){

        $url = explode('/',$url);

        self::$controller = $url[0];

        self::$method = $url[1];

        self::$params = array_slice($url,2);

        // let's roll

        if(self::checkController()){
            if(self::checkMethod()){
                if(self::checkParameters()){

                    // let's call the method with arguments

                    self::callMethod();

                }else{
                    self::notFound();
                }
            }else{
                self::notFound();
            }
        }else{
            self::notFound();
        }

    }

    private static function checkController(){

        if(file_exists('../app/Controllers/'.self::$controller.'.php')){
            return true;
        }else{
            return false;
        }

    }

    private static function checkMethod(){

        $refl = new \ReflectionClass(self::controllerNamespace.self::$controller);

        if($refl->hasMethod(self::$method)){
            return true;
        }else{
            return false;
        }

    }

    private static function checkParameters(){

        $refl = new ReflectionMethod(self::controllerNamespace.self::$controller,self::$method);

        $parameters = $refl->getParameters();

        $i = 0;

        foreach($parameters as $param){

            if(!$param->isDefaultValueAvailable()){
                $i++;
            }

        }

        if($i <= count(self::$params)){
            return true;
        }else{
            return false;
        }

    }

    private static function callMethod(){

        $refClass = new ReflectionClass(self::controllerNamespace.self::$controller);

        $instanceOfClass = $refClass->newInstance();

        $refMethod = new ReflectionMethod(self::controllerNamespace.self::$controller,self::$method);

        $refMethod->invokeArgs($instanceOfClass,self::$params);

    }

    private static function notFound(){

        http_response_code(404);

        echo '404 Not Found';

    }

}