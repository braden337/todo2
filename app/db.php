<?php

class DB
{
    public static $handle;

    public static function init()
    {
        self::$handle = new PDO('mysql:host=db;dbname=todo', 'root', 'todo');
        self::$handle->exec('CREATE TABLE IF NOT EXISTS user (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), name VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL)');
        self::$handle->exec('CREATE TABLE IF NOT EXISTS todo (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), description TEXT NOT NULL, due DATETIME NOT NULL, completed BOOLEAN NOT NULL DEFAULT 0, user_id INT NOT NULL REFERENCES user(id))');
    }
}
