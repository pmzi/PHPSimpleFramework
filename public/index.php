<?php

$url = $_GET['url'];

session_start();

require('../kernel/router.php');

require('../kernel/autoloader.php');

Router::handle($url);