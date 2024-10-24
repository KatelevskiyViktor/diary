<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}

function concat($post)
{
    $dispute = '';
    foreach ($post as $key => $value) {
        if(($key = substr($key, 0,7)) == 'dispute'){
            $dispute .= $value . ' ';
        }
    }
    return $dispute;
}