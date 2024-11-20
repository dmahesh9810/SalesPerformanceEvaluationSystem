<?php

namespace App; // This should be the very first line

class Router
{
    private static $routes = [];

    public static function get($uri, $action)
    {
        self::addRoute('GET', $uri, $action);
    }

    public static function post($uri, $action)
    {
        self::addRoute('POST', $uri, $action);
    }

    public static function put($uri, $action)
    {
        self::addRoute('PUT', $uri, $action);
    }

    public static function delete($uri, $action)
    {
        self::addRoute('DELETE', $uri, $action);
    }

    private static function addRoute($method, $uri, $action)
    {
        self::$routes[] = compact('method', 'uri', 'action');
    }

    public static function dispatch($uri, $method)
    {
        foreach (self::$routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                list($controller, $method) = explode('@', $route['action']);
                $controller = "App\\Controllers\\$controller";
                call_user_func_array([new $controller, $method], []);
                return;
            }
        }
        http_response_code(404);
        echo json_encode(['error' => 'Route not found']);
    }
}
