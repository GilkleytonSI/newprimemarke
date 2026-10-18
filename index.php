<?php
declare(strict_types=1);
// Ponto de entrada da aplicação: compatível com XAMPP/PHP 8.0.
spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    if (strncmp($class, $prefix, strlen($prefix)) !== 0) return;
    $relative = substr($class, strlen($prefix));
    $file = __DIR__ . '/app/' . str_replace('\\', '/', $relative) . '.php';
    if (is_file($file)) require $file;
});
function base_url(string $path = ''): string {
    $base = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
    if (str_ends_with($base, '/public')) $base = substr($base, 0, -7);
    $base = $base === '/' || $base === '.' ? '' : rtrim($base, '/');
    return $base . '/' . ltrim($path, '/');
}
$scriptBase = rtrim(base_url(), '/');
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = substr($uri, strlen($scriptBase));
$path = '/' . trim($path, '/');
if ($path === '/index.php' || $path === '/public/index.php') $path = '/';
$router = new App\Core\Router();
$home = new App\Controllers\HomeController();
$blog = new App\Controllers\BlogController();
$router->get('/', [$home, 'index']);
$router->get('/blog', [$blog, 'index']);
$router->get('/artigo', [$blog, 'show']);
$router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $path);
