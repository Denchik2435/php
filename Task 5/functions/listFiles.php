<?php

function listFiles($loc) {
    $uploadsDir = "uploads/";
    $docsDir = $uploadsDir . "docs/";
    $imagesDir = $uploadsDir . "images/";

    if (!file_exists($uploadsDir)) {
        mkdir($uploadsDir);
    }
    if (!file_exists($docsDir)) {
        mkdir($docsDir);
    }
    if (!file_exists($imagesDir)) {
        mkdir($imagesDir);
    }

    // Отримання списку елементів у папці
    $files = scandir($loc);
    
    // Прохід через кожен елемент
    foreach ($files as $file) {
        // Пропускаємо . та .. 
        if ($file != '.' && $file != '..') {
            $path = $loc . "/". $file;
            
            if (is_dir($path)) {
                listFiles($path);
            } else {
                // Виводимо шлях до файлу, якщо це файл
                echo $path . "<br>";
            }
        }
    }
}