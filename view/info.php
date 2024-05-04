<?php

$request = $_SERVER["REQUEST_URI"];
// $path = parse_url($request, PHP_URL_PATH);

switch ($request) {
    case ("/roxxon"):
    case ("/roxxon/"):
    case ("/roxxon/view/index.php"):
    case ("/roxxon/index.php/"):
    case ("/roxxon/register_form.php"):
   
        require __DIR__ . "/home.php";
        break;

    case "/roxxon/about":
        require __DIR__ . "/view/index.php";
        break;
    case "/roxxon/home":
        require __DIR__ . "/view/error.php";
        break;

    default:
        // require __DIR__ . "/view/error.php";
        echo 'hello';
        break;
}

?>