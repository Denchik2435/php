<?php

function copyRenamed($source_dir, $target_dir, $files_list) {
    foreach ($files_list as $key_old => $key_new) {
        $path_old = $source_dir . '/' . $key_old;
        $path_new = $target_dir . '/' . $key_new;
        copy($path_old, $path_new);
    };
}