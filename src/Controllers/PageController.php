<?php
namespace App\Controllers;

use App\Core\View;

class PageController
{
    protected View $view;
    protected array $config;

    public function __construct(View $view)
    {
        $this->view = $view;
        $this->config = require CONFIG_PATH . '/config.php';
    }

    public function home()
    {
        $testimonials = require DATA_PATH . '/testimonials.php';
        $services = require DATA_PATH . '/services.php';
        return $this->view->render('home', [
            'testimonials' => $testimonials,
            'services' => $services,
            'config' => $this->config
        ], 'Faizan Ali - Full Stack Developer Portfolio');
    }

    public function about()
    {
        return $this->view->render('about', [
            'config' => $this->config
        ], 'About - Faizan Ali');
    }

    public function services()
    {
        $services = require DATA_PATH . '/services.php';
        return $this->view->render('services', [
            'services' => $services,
            'config' => $this->config
        ], 'Services - Faizan Ali');
    }

    public function projects()
    {
        $projects = require DATA_PATH . '/projects.php';
        return $this->view->render('projects', [
            'projects' => $projects,
            'config' => $this->config
        ], 'Projects - Faizan Ali');
    }

    public function skills()
    {
        $skills = require DATA_PATH . '/skills.php';
        return $this->view->render('skills', [
            'skills' => $skills,
            'config' => $this->config
        ], 'Skills - Faizan Ali');
    }

    public function contact()
    {
        return $this->view->render('contact', [
            'config' => $this->config
        ], 'Contact - Faizan Ali');
    }

    public function notFound()
    {
        http_response_code(404);
        return $this->view->render('404', [], 'Page Not Found');
    }

    /**
     * Serve chatbot JSON data from data/chatbot.json
     */
    public function chatbotData()
    {
        header('Content-Type: application/json; charset=utf-8');
        $jsonFile = DATA_PATH . '/chatbot.json';
        if (!file_exists($jsonFile)) {
            http_response_code(500);
            echo json_encode(['error' => 'Chatbot data file not found.']);
            return;
        }
        $jsonData = json_decode(file_get_contents($jsonFile), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(500);
            echo json_encode(['error' => 'Invalid JSON in chatbot data.']);
            return;
        }
        // Ensure both suggestions and faqs keys exist
        if (!isset($jsonData['suggestions']) || !isset($jsonData['faqs'])) {
            // If old format (just array), wrap it
            if (isset($jsonData[0])) {
                $jsonData = [
                    'suggestions' => [],
                    'faqs' => $jsonData
                ];
            }
        }
        echo json_encode($jsonData);
        exit;
    }
}