<?php

namespace Project\Controllers;

use Project\Viewer;

class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About Page';
        $content = 'Hello! Its about page';
        $info = 'This is a simple page created using the Latte template engine.';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }
}
