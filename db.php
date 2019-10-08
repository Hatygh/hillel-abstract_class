<?php

class Db
{
    protected static $instance;

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new \PDO('mysql:host=172.27.0.2;dbname=blog', 'root', 'secret');
        }

        return self::$instance;
    }
}
