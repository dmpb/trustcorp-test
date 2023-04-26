<?php

$router->get('', 'Controllers/index.php');

$router->get('users/create', 'Controllers/create-user.php');

$router->post('users/store', 'Controllers/store-user.php');

$router->post('users/delete', 'Controllers/delete-user.php');