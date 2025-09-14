<?php
namespace App\Controllers;

/**
 * Controller for the privacy policy page.
 */
class PrivacyController {
    /**
     * Renders the privacy policy page.
     * Sets the title and page name for the view.
     * React is not enabled for this page.
     */
    public function index() {
        $title = 'Privacy Policy';
        $page = 'privacy';
        $data = []; // No data needed for this page

        include __DIR__ . '/../Views/layouts/app.php';
    }
}
