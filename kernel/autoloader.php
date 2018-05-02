<?php
function __autoload($toLoad){
    require_once('../'.$toLoad.'.php');

}