<?php
namespace App\Controllers;

/**
 * Controller for the contact page.
 */
class ContactController {
    /**
     * Renders the contact page.
     * Sets the title, page name, and data for the view.
     * Enables React for this page.
     */
    public function index() {
        $title = 'Contact Us';
        $page = 'contact';
        $data = [
            'email' => 'contact@yourcompany.com',
            'phone' => '+1 (555) 123-4567',
            'address' => '123 Main St, City, State 12345'
        ];
        $react = true;

        include __DIR__ . '/../Views/layouts/app.php';
    }
}
