<?php
/**
 * Simple PSR-4 Autoloader for Faizan Portfolio
 * Maps App\* to src/ directory
 */

spl_autoload_register(function ($class) {
    // Base namespace
    $prefix = 'App\\';
    
    // Check if class is in App namespace
    if (strpos($class, $prefix) !== 0) {
        return;
    }
    
    // Remove the namespace prefix to get the relative path
    $relative_class = substr($class, strlen($prefix));
    
    // src/ is one level up from vendor/
    $base_path = dirname(__DIR__) . '/src/';
    
    // Convert namespace to file path
    $file = $base_path . str_replace('\\', '/', $relative_class) . '.php';
    
    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
