<?php
namespace App\Controllers;

/**
 * Controller for the home page.
 */
class HomeController {
    /**
     * Renders the home page.
     * Sets the title, page name, and data for the view.
     * Enables React for this page.
     */
    public function index() {
        $title = 'Home Page';
        $page = 'home';
        $data = [
            'welcome_message' => 'Welcome to our PHP + React application!',
            'features' => ['Server-side routing', 'React components', 'Hot reload']
        ];
        $react = true;

        include __DIR__ . '/../Views/layouts/app.php';
    }
}
