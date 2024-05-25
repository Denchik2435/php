<?php
    $FILES = 'files';
    $FILES_N = 'files_new';

    include './functions/translit.php';
    include './functions/getFiles.php';
    include './functions/deleteSymbols.php';
    include './functions/copyRenamed.php';

    //Подивитися в папку з файлами та вивести їх в консоль  
    $files = getfiles($FILES); // масив що містить старі назви файлів

    //Створити функцію, яка замінить літери з кирилиці на латиницю
    $new_files = []; // масив латинських назв
    foreach($files as $file){
        $new_files[$file] = translit($file);
    }

    //Створити функцію, яка видаляє символи, пробіли з рядка
    $new_files_clear = [];
    foreach ($new_files as $key => $file){
        $new_files_clear[$key] = deletesymbols($file);
    }

    print_r($new_files_clear);

    copyRenamed($FILES, $FILES_N, $new_files_clear);