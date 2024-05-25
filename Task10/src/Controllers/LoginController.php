<?php

namespace Project\Controllers;

use Project\Viewer;
use JetBrains\PhpStorm\NoReturn;

class LoginController
{
    /**
     * @return void
     * Ця функція відповідає за відображення сторінки входу
     */
    public function index(): void
    {
        $page = 'login';
        $title = 'Login Page';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title
            ]
        );

        $view->render();
    }

    #[NoReturn] public function auth(): void
    {
        if(!isset($_POST['login'])) {
            header('Location: /login');
            exit;
        }

        $login = $_POST['login'] ?? '';

        if ($login === 'Test') {
            $_SESSION['login'] = $login;
            header('Location: /contacts');
        } else {

            header('Location: /login');
        }
        exit;
    }
}
