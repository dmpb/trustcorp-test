<?php

$users = $app['database']->selectAll('users');

require __DIR__ . "/../../views/index.php";
