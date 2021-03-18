<?php
new SQLite3(__DIR__.'/todo.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db = new PDO('sqlite:'.__DIR__.'/todo.db');

$db->exec('CREATE TABLE IF NOT EXISTS user (
        id INTEGER PRIMARY KEY,
        name TEXT UNIQUE,
        password TEXT);
        CREATE TABLE IF NOT EXISTS todo (
            id INTEGER PRIMARY KEY,
            description TEXT,
            due INTEGER,
            user_id INTEGER,
            FOREIGN KEY(user_id) REFERENCES user(id)
        )');
