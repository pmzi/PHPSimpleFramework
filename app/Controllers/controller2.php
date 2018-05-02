<?php

namespace app\Controllers;

class Controller2 extends Controller {

    public function method($param1,$param2){

        $var1 = "var1";

        return $this->view('index',["var1"=>$var1]);
    }

}