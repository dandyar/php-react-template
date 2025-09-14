<?php
namespace App\Controllers;

/**
 * Controller for the about page.
 */
class AboutController {
    /**
     * Renders the about page.
     * Sets the title, page name, and data for the view.
     * Enables React for this page.
     */
    public function index() {
        $title = 'About Us';
        $page = 'about';
        $data = [
            'company_name' => 'Your Company',
            'description' => 'We build amazing web applications using modern technologies.',
            'team_size' => 10
        ];
        $react = true;

        include __DIR__ . '/../Views/layouts/app.php';
    }
}
