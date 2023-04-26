<?php

// Eliminar usuario
$app['database']->delete('users', $_POST['id']);

// Redirigir al listado de usuarios
header('Location: /', true);