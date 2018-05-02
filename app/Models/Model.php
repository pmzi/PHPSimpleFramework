<?php

namespace app\Models;

class Model{

    private $mysqli;

    protected $table = '';

    function __construct()
    {

        $coords = require('../app/config/database.php');

        $this->mysqli = new \mysqli($coords['host'],$coords['username'],$coords['password'],$coords['dbName']);

    }

    protected function getAll(){

        $stmt = $this->mysqli->stmt_init();

        $stmt->prepare('SELECT * FROM '.$this->table);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);

    }

}