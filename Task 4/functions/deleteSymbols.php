<?php

    function deleteSymbols(string $filename) : string {
        $pattern = '/[\W]/';

        $info = pathinfo($filename);
        $name = $info['filename'];
        $extension = $info['extension']; // .docx, .txt, etc

        $name = preg_replace($pattern, '',$name);

        return $name.".".$extension;
    }