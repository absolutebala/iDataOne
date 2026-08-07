<?php
// Router: maps /case-study/{slug} to the correct template
$slug = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$slug = str_replace('case-study/', '', $slug);

$allowed = [
    'risk-platform'       => __DIR__ . '/case-risk-platform.php',
    'risk-dashboard'      => __DIR__ . '/case-risk-dashboard.php',
    'telecom-pm-platform' => __DIR__ . '/case-telecom-pm-platform.php',
    'isportone'           => __DIR__ . '/case-isportone.php',
    'mealmate'            => __DIR__ . '/case-mealmate.php',
    'aidesker'            => __DIR__ . '/case-aidesker.php',
];

if (isset($allowed[$slug]) && file_exists($allowed[$slug])) {
    include $allowed[$slug];
} else {
    http_response_code(404);
    include __DIR__ . '/index.php';
}
