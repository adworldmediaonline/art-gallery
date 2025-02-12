<?php
// Base URL Configuration
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];

    // Always use /mywebsite for now - we'll change this when going live
    return $protocol . $host . '/mywebsite';
}

// Define constant for base URL
define('BASE_URL', getBaseUrl());

// Website Configuration
define('SITE_NAME', 'BRANDNAME');
define('SITE_EMAIL', 'contact@' . $_SERVER['HTTP_HOST']);
define('PRIVACY_EMAIL', 'privacy@' . $_SERVER['HTTP_HOST']);
define('SUPPORT_PHONE', '+1 (123) 456-7890');

// Other configuration settings can be added here
?>
