<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';
$jaflogic = '/jaflogic/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/portfolio/graphics-design':
    case '/portfolio/graphics-design/':
        require __DIR__ . $viewDir . 'graphics.php';
        break;

    case '/portfolio/website-design':
    case '/portfolio/website-design/':
        require __DIR__ . $viewDir . 'web.php';
        break;

    case '/services':
    case '/services/':
        require __DIR__ . $viewDir . 'services.php';
        break;

    case '/resume':
    case '/resume/':
        require __DIR__ . $viewDir . 'resume.php';
        break;

    case '/portfolio/website-design/jaflogic':
    case '/portfolio/website-design/jaflogic/':
        require __DIR__ . $jaflogic . 'jaflogic.html';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

?>