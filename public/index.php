<?php
header('Access-Control-Allow-Origin: *'); // Allow any origin; for production, specify your domain
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); // Allow specific methods
header('Access-Control-Allow-Headers: Authorization, Content-Type'); // Allow specific headers
require_once '../vendor/autoload.php';

// Import the Router class
use App\Router;  // <-- Make sure this line is present

// Load routes
require_once '../routes/api.php';

// Parse the request
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
Router::dispatch($uri, $method);
