<?php
namespace App\Core;

class View
{
    protected string $layout = 'main';

    public function render(string $page, array $data = [], string $pageTitle = '')
    {
        // Extract data for template
        extract($data);
        $content = $this->getPageContent($page, $data);
        $title = $pageTitle ?: APP_NAME;

        // Start output buffering
        ob_start();
        require_once TEMPLATES_PATH . '/layouts/' . $this->layout . '.php';
        return ob_get_clean();
    }

    protected function getPageContent(string $page, array $data): string
    {
        $pageFile = TEMPLATES_PATH . '/pages/' . $page . '.php';
        if (!file_exists($pageFile)) {
            $pageFile = TEMPLATES_PATH . '/pages/404.php';
        }
        extract($data);
        ob_start();
        require $pageFile;
        return ob_get_clean();
    }

    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }
}