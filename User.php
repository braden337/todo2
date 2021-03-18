<?php

class User
{
    public static function register($username, $password, $password_confirmation)
    {
        global $db;

        $hasDetails = isset($username, $password, $password_confirmation);

        if ($hasDetails && $password == $password_confirmation) {
            $pw_hash = password_hash($password, PASSWORD_DEFAULT);

            $statement = $db->prepare('INSERT INTO user (name, password) VALUES (?, ?)');

            if ($statement->execute(array($username, $pw_hash))) {
                echo "You've been registered";
            } else {
                echo "Already registered";
            }
        }
    }

    public static function login()
    {
        global $db;
        
        $hasDetails = isset($_POST['username'], $_POST['password']);
        
        if ($hasDetails) {
            Auth::validate_csrf();
            $username = $_POST['username'];
            $password = $_POST['password'];

            $statement = $db->prepare('SELECT * FROM user WHERE name = ?');
            
            if ($statement->execute(array($username))) {
                $user = $statement->fetchObject();
                
                if (isset($user) && password_verify($password, $user->password)) {
                    $_SESSION['user'] = $user;
                    header('Location: /');
                    die();
                }
            }
        }
    }

    public static function logout()
    {
        Auth::validate_csrf();
        session_unset();
        header('Location: /login.php');
        die();
    }

    public static function logged_in()
    {
        return isset($_SESSION['user']);
    }

    public static function current()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }
}
