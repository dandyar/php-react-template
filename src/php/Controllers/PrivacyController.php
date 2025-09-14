<?php
namespace App\Controllers;

class PrivacyController {
    public function index() {
        $title = 'Privacy Policy';
        $page = 'privacy';
        $data = []; // No data needed for this page

        include __DIR__ . '/../Views/layouts/app.php';
    }
}
