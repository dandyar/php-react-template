<?php
namespace App\Controllers;

class ContactController {
    public function index() {
        $title = 'Contact Us';
        $page = 'contact';
        $data = [
            'email' => 'contact@yourcompany.com',
            'phone' => '+1 (555) 123-4567',
            'address' => '123 Main St, City, State 12345'
        ];
        
        include __DIR__ . '/../Views/layouts/app.php';
    }
}