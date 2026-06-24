<?php
/**
 * Global helper functions
 */

if (!function_exists('esc')) {
    function esc(string $string): string {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('redirect')) {
    function redirect(string $url, int $statusCode = 302): never {
        header("Location: {$url}", true, $statusCode);
        exit;
    }
}