<?php
session_start();

require_once 'db.php';

DB::init();

require_once 'User.php';
require_once 'Auth.php';
