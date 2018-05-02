<?php

namespace app\Controllers;

class Controller{

    private $base_url;

    function __construct()
    {

        $urlConfig = require(__DIR__.'/../../app/config/url.php');

        $this->base_url = $urlConfig['base_url'];

    }

    protected function view($viewName,$arrayOfArgs){

        foreach ($arrayOfArgs as $arg=>$key) {
            ${$key} = $arg;
        }

        return require(__DIR__.'/../../views/'.$viewName.'.php');

    }

}