<?php

use Illuminate\Support\Facades\Request;


function getCurrentPath()
    {
        $url = Request::url();
        $path = parse_url($url, PHP_URL_PATH);
        return ltrim($path, '/'); 
    }
?>

