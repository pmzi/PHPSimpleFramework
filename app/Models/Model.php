<?php

namespace app\Models;

class Model{

    protected $mysqli;

    protected $table = '';

    function __construct()
    {

        $coords = require('../app/config/database.php');

        $this->mysqli = new \mysqli($coords['host'],$coords['username'],$coords['password'],$coords['dbName']);

        $this->mysqli->set_charset("utf8");

    }

    public function getAll(){

        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('SELECT * FROM '.$this->table);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function getSpecific($id){

        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('SELECT * FROM '.$this->table.' WHERE `id` = ?');

        $stmt->bind_param('i',$id);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

}