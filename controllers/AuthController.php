<?php

include ('config/db_connect.php');

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,name,email,password,roles FROM users WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

        if(count((array)$user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['roles'] = $user['roles'];

            header("Location: index.php");
        }
    }
}
