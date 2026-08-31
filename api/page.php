<?php
// Router: serves simple static pages that don't need their own Vercel function slot.
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$allowed = [
    'isportone'   => __DIR__ . '/../includes/page-isportone.php',
    'infra360PMS' => __DIR__ . '/../includes/page-infra360pms.php',
];

if (isset($allowed[$path]) && file_exists($allowed[$path])) {
    include $allowed[$path];
} else {
    http_response_code(404);
    include __DIR__ . '/../includes/404.php';
}
