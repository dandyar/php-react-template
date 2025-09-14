<?php
namespace App;

/**
 * A simple middleware for handling common tasks like setting headers.
 */
class Middleware {
    /**
     * Handles the middleware logic.
     * Sets CORS and security headers.
     * Handles preflight requests.
     */
    public function handle() {
        // CORS headers for development
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');

        // Security headers
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        header('X-XSS-Protection: 1; mode=block');

        // Handle preflight requests
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(200);
            exit;
        }
    }
}
