<?php
namespace App\Controllers;

class AboutController {
    public function index() {
        $title = 'About Us';
        $page = 'about';
        $data = [
            'company_name' => 'Your Company',
            'description' => 'We build amazing web applications using modern technologies.',
            'team_size' => 10
        ];
        
        include __DIR__ . '/../Views/layouts/app.php';
    }
}