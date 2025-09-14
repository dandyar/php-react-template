<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        $title = 'Home Page';
        $page = 'home';
        $data = [
            'welcome_message' => 'Welcome to our PHP + React application!',
            'features' => ['Server-side routing', 'React components', 'Hot reload']
        ];
        
        include __DIR__ . '/../Views/layouts/app.php';
    }
}