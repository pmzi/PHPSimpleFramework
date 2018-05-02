<?php

$url = $_GET['url'];

require('../kernel/router.php');

require('../kernel/autoloader.php');

Router::handle($url);