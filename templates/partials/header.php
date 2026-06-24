<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faizan Ali is a Full Stack Web Developer specializing in PHP, Laravel, MERN Stack, Node.js, AI integrations, SEO, UI/UX, and Website Security. Available on Fiverr & Upwork.">
    <meta name="keywords" content="faizan ali, full stack developer, freelance, php, laravel, mern, node.js, seo, ai, must university">
    <meta name="author" content="Faizan Ali">
    <title><?= esc($title ?? 'Faizan Ali Portfolio') ?></title>

    <!-- Antigravity Framework (Base CSS + Animations) -->
    <link rel="stylesheet" href="/assets/vendor/antigravity/antigravity.min.css">
    <!-- Custom Style (Glassmorphism + Color Scheme) -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Chatbot Widget Styles -->
    <link rel="stylesheet" href="/assets/css/chatbot.css">
</head>
<body>

<!-- ========== GLASS FLOATING NAVBAR ========== -->
<nav class="ag-navbar glass">
    <div class="ag-container">
        <!-- Brand / Logo with Toggle Button -->
        <div class="ag-navbar-brand">
            <a href="/" style="flex: 1;">
                Faizan<span>.</span>Ali
            </a>
            <!-- Mobile Toggle Button -->
            <button class="ag-navbar-toggler" id="navbar-toggler" aria-label="Toggle navigation">
                ☰
            </button>
        </div>

        <!-- Nav Menu (will be hidden on mobile) -->
        <div class="ag-navbar-collapse" id="navbar-collapse">
            <ul class="ag-navbar-menu">
                <li><a href="/" class="ag-nav-link">Home</a></li>
                <li><a href="/about" class="ag-nav-link">About</a></li>
                <li><a href="/services" class="ag-nav-link">Services</a></li>
                <li><a href="/projects" class="ag-nav-link">Projects</a></li>
                <li><a href="/skills" class="ag-nav-link">Skills</a></li>
                <li><a href="/contact" class="ag-nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content Area -->
<main class="ag-container">