<?php
declare(strict_types=1);
namespace App\Core;
final class View {
    public static function render(string $name, array $data = []): void {
        $base = dirname(__DIR__) . '/Views/';
        $file = $base . $name . '.php';
        if (!is_file($file) || !str_starts_with(realpath($file) ?: '', realpath($base) ?: '')) { throw new \RuntimeException('View inválida'); }
        extract($data, EXTR_SKIP);
        require $file;
    }
}
