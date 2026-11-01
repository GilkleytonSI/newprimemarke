<?php

declare(strict_types=1);
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit('Acesso negado');
}
$password = getenv('PM_ADMIN_PASSWORD');
if (!is_string($password) || strlen($password) < 12) {
    fwrite(STDERR, "Defina PM_ADMIN_PASSWORD com pelo menos 12 caracteres.\n");
    exit(1);
}
$file = dirname(__DIR__) . '/storage/data/admin.json';
if (is_file($file)) {
    fwrite(STDERR, "Administrador já existe. Nenhuma alteração feita.\n");
    exit(1);
}
$data = json_encode(['password_hash' => password_hash($password, PASSWORD_DEFAULT)], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR);
if (file_put_contents($file, $data, LOCK_EX) === false) {
    fwrite(STDERR, "Falha ao criar administrador.\n");
    exit(1);
}
echo "Administrador criado.\n";
