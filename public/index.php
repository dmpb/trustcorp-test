<?php

// bootstrap
require_once __DIR__ . "/../app/bootstrap.php";

// Router
require __DIR__ . "/../app/" . Router::load('routes.php')->direct(Request::uri(), Request::method());
