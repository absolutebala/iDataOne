<?php
// Router: maps /case-study/{slug} to the correct template
$slug = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$slug = str_replace('case-study/', '', $slug);

$allowed = [
    'knight-ryders'               => __DIR__ . '/../includes/case-knight-ryders.php',
    'risk-platform'               => __DIR__ . '/../includes/case-risk-platform.php',
    'risk-dashboard'              => __DIR__ . '/../includes/case-risk-dashboard.php',
    'telecom-pm-platform'         => __DIR__ . '/../includes/case-telecom-pm-platform.php',
    'isportone'                   => __DIR__ . '/../includes/case-isportone.php',
    'mealmate'                    => __DIR__ . '/../includes/case-mealmate.php',
    'aidesker'                    => __DIR__ . '/../includes/case-aidesker.php',
    'finance-automation'          => __DIR__ . '/../includes/case-finance-automation.php',
    'emr-global-field-engineers'  => __DIR__ . '/../includes/case-emr-global.php',
];

if (isset($allowed[$slug]) && file_exists($allowed[$slug])) {
    include $allowed[$slug];
} else {
    http_response_code(404);
    include __DIR__ . '/../includes/404.php';
}
