<?php
declare(strict_types=1);

namespace App;

final class App
{
    public function run(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        header('Content-Type: application/json; charset=utf-8');

        if ($path === '/api/health') {
            echo json_encode(['ok' => true, 'time' => date(DATE_ATOM)], JSON_UNESCAPED_UNICODE);
            return;
        }

        if ($path === '/api/items') {
            echo json_encode([
                'items' => [
                    ['id' => 1, 'name' => 'demo', 'enabled' => true],
                ],
            ], JSON_UNESCAPED_UNICODE);
            return;
        }

        http_response_code(404);
        echo json_encode(['error' => 'not found'], JSON_UNESCAPED_UNICODE);
    }
}
