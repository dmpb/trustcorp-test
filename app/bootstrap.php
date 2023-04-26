<?php

require_once __DIR__  . "/../app/Router.php";

require_once __DIR__ . "/../app/Request.php";

require_once __DIR__ . "/../app/Database/Connection.php";

require_once __DIR__ . "/../app/Database/QueryBuilder.php";

require_once __DIR__ . "/../app/functions.php";

$app = [];

$app['config'] = require __DIR__ . "/../config.php";

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
