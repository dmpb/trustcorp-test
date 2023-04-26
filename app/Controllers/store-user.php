<?php

// Validate data
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Create profile
$app['database']->insert('profile', ['nickname' => hash('ripemd160', 'trustcorp')]);

// Obtener el ultimo registro
$profile = $app['database']->last('profile');

// Create user
$user = $app['database']->insert('users', [
    'profile_id' => $profile->id,
    'rut' => validate_input($_POST['rut']),
    'name_one' => validate_input($_POST['name_one']),
    'name_two' => validate_input($_POST['name_two']),
    'last_name_one' => validate_input($_POST['last_name_one']),
    'last_name_two' => validate_input($_POST['last_name_two']),
]);

header('Location: /', true);