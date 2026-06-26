<?php

class AuthController
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        require __DIR__ . '/../views/auth/auth.php';
    }

    public function register()
    {
        echo "Register Page Coming Soon";
    }

    public function logout()
    {
        session_destroy();

        header('Location: index.php?a=home');
        exit;
    }
}