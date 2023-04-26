<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'] . ";dbname=" . $config['name'],
                $config['username'],
                $config['password'],
            );
        } catch (PDOException $th) {
            die('No se pudo conectar');
        }
    }
}
