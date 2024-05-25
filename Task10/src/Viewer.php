<?php

namespace Project;

use Latte;

class Viewer
{
    /**
     * @var array<string, mixed> $data An associative array where the key is a string and the value can be any type.
     */
    private array $data = [];

    /**
     * Constructor for Viewer.
     * @param array<string, mixed> $data Initial data for the viewer, where each key is a string and the value can be any type.
     */
    public function __construct(array $data = []){
        $this->data = $data;
    }

    /**
     * @return void
     */
    public function render(): void
    {
        $latte = new Latte\Engine;
        $latte->setTempDirectory(__DIR__ . '/../views/cache');

        $isUserLoggedIn = !empty($_SESSION['login']) && $_SESSION['login'] === 'Test';

        $params = $this->data;
        $params['isUserLoggedIn'] = $isUserLoggedIn;

        $latte->render(__DIR__ . '/../views/index.latte', $params);
    }
}
