<?php

namespace app\Controllers;

use app\models\User;

class Admin extends Controller {

    public function login(){

        if(@!$_SESSION['isAdmin']){
            if(count($_POST) != 0){
                $this->doLogin();
            }else{
                return $this->view('auth/login');
            }
        }else{
            header('location: ../posts/showAll');
        }

    }

    public function doLogin(){

        if(isset($_POST['username']) && isset($_POST['password'])){

            $user = new User();

            if($user->getByUsernameAndPassword($_POST['username'],$_POST['password'])){

                $_SESSION['isAdmin'] = true;

                header('location: ../posts/showAll');

            }else{

                return $this->view('auth/login',['error'=>'Username Or Password is Incorrent.']);

            }

        }else{
            return $this->view('auth/login');
        }

    }

    public function logout(){
        if(isset($_SESSION['isAdmin'])){
            unset($_SESSION['isAdmin']);
        }
        header('location: ../posts/showAll');
    }

}