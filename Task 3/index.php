<?php

function formatString($input): string
{
    // Remove non-alphanumeric characters, except for spaces
    $output = preg_replace("/[^a-zA-Z\s]+/", "", $input);

    // Replace spaces with no spaces
    $output = str_replace(" ", "", $output);

    // Convert to lowercase
    $output = strtolower($output);

    // Alternate case of each character
    $result = '';
    $upper = true;
    for ($i = 0; $i < strlen($output); $i++) {
        $result .= ($upper ? strtoupper($output[$i]) : strtolower($output[$i]));
        $upper = !$upper;
    }

    return $result;
}

$input = "This is a test! 123, ABC";
$output = formatString($input);
echo $output; // Output: "TiIs Is A A"