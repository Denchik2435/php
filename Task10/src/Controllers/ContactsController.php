<?php

namespace Project\Controllers;

use Project\Viewer;


class ContactsController
{
    public function index(): void
    {
        $page = 'contacts';
        $title = 'Contacts Page';
        $content = 'Hello! Its Contacts page';
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
