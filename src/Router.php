<?php

class Router
{
    private static array $routes = [];

    public static function add(string $method, string $path, array $action): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action,
        ];
    }

    public static function dispatch(string $uri, string $method): void
    {
        $path = parse_url($uri, PHP_URL_PATH);

        foreach (self::$routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                $controller = $route['action'][0];
                $actionName = $route['action'][1];

                $controller->$actionName();
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['error' => 'Not found']);
        exit;
    }

    public static function get(string $path, array $action): void
    {
        self::add('GET', $path, $action);
    }

    public static function post(string $path, array $action): void
    {
        self::add('POST', $path, $action);
    }
}
