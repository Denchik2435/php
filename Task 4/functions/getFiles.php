<?php

    function getFiles(string $dir) : array|false {
        $path = getcwd().DIRECTORY_SEPARATOR.$dir;
        $arr = scandir($path);
        $arr = array_diff($arr, array('.', '..'));
        return $arr;
    }