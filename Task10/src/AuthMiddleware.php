<?php

namespace Project;

class AuthMiddleware
{
    public function handle($handler, $vars)
    {
        if (!empty($_SESSION['login']) && $_SESSION['login'] === 'Test') {
            return call_user_func($handler, $vars);
        } else {
            header('Location: /login'); // Перенаправити на сторінку входу
            exit;
        }
    }
}
