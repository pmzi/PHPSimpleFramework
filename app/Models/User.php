<?php

namespace app\Models;

class User extends Model {

    protected $table = 'user';

    public function method(){
        var_dump($this->getAll());
    }
}