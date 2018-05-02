<?php

namespace app\Models;

class User extends Model {

    protected $table = 'users';

    public function getByUsernameAndPassword($username,$password){
        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('SELECT id FROM '.$this->table.' WHERE username = ? AND password = ?');

        $stmt->bind_param('ss',$username,$password);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

}