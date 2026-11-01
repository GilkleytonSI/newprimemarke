<?php
declare(strict_types=1);
namespace App\Models;

/** Repositório de portfólio em JSON; interface pronta para trocar por PDO no painel. */
final class Project {
    private string $file;
    private const CATEGORIES = ['sites', 'landing-pages', 'lojas', 'catalogos', 'pagina-links'];

    public function __construct() { $this->file = dirname(__DIR__, 2) . '/storage/data/projects.json'; }

    public function published(): array {
        $items = array_values(array_filter($this->all(), static fn(array $p): bool => ($p['published'] ?? false) === true));
        usort($items, static fn(array $a, array $b): int => ($a['order'] ?? 999) <=> ($b['order'] ?? 999));
        return $items;
    }
    public function all(): array {
        if (!is_file($this->file)) return [];
        $items = json_decode((string) file_get_contents($this->file), true);
        return is_array($items) ? array_values(array_filter($items, 'is_array')) : [];
    }
    public function find(string $id): ?array {
        foreach ($this->all() as $item) if (($item['id'] ?? '') === $id) return $item;
        return null;
    }
    /** API de persistência para uso FUTURO por controller autenticado. */
    public function save(array $input): string {
        $item = $this->validate($input);
        $items = $this->all(); $found = false;
        foreach ($items as $i => $existing) {
            if (($existing['id'] ?? '') === $item['id']) { $items[$i] = $item; $found = true; break; }
        }
        if (!$found) $items[] = $item;
        $this->write($items);
        return $item['id'];
    }
    public function delete(string $id): void {
        $this->write(array_values(array_filter($this->all(), static fn(array $p): bool => ($p['id'] ?? '') !== $id)));
    }
    private function validate(array $input): array {
        $title = trim((string)($input['title'] ?? ''));
        $description = trim((string)($input['description'] ?? ''));
        $category = (string)($input['category'] ?? '');
        if ($title === '' || mb_strlen($title) > 120 || $description === '' || mb_strlen($description) > 2000 || !in_array($category, self::CATEGORIES, true)) {
            throw new \InvalidArgumentException('Título, descrição ou categoria inválidos.');
        }
        $image = trim((string)($input['image'] ?? ''));
        $link = trim((string)($input['link'] ?? ''));
        foreach ([$image, $link] as $url) {
            if ($url !== '' && !filter_var($url, FILTER_VALIDATE_URL) && !preg_match('~^public/assets/img/[a-zA-Z0-9_.-]+$~', $url)) {
                throw new \InvalidArgumentException('URL inválida.');
            }
            if (preg_match('~^https?://~i', $url) && !in_array(strtolower((string)parse_url($url, PHP_URL_SCHEME)), ['http','https'], true)) throw new \InvalidArgumentException('Protocolo inválido.');
        }
        $tech = $input['technologies'] ?? [];
        if (is_string($tech)) $tech = explode(',', $tech);
        if (!is_array($tech)) throw new \InvalidArgumentException('Tecnologias inválidas.');
        $tech = array_slice(array_values(array_filter(array_map('trim', array_map('strval', $tech)))), 0, 20);
        return ['id' => preg_match('/^[a-z0-9-]{1,60}$/', (string)($input['id'] ?? '')) ? $input['id'] : bin2hex(random_bytes(8)),
            'title' => $title, 'description' => $description, 'category' => $category,
            'type' => trim((string)($input['type'] ?? $category)), 'image' => $image,
            'technologies' => $tech, 'link' => $link, 'published' => (bool)($input['published'] ?? false),
            'order' => max(0, (int)($input['order'] ?? 999))];
    }
    private function write(array $items): void {
        $dir = dirname($this->file);
        if (!is_dir($dir) && !mkdir($dir, 0775, true) && !is_dir($dir)) throw new \RuntimeException('Diretório indisponível');
        $fp = fopen($this->file . '.lock', 'c');
        if (!$fp || !flock($fp, LOCK_EX)) throw new \RuntimeException('Falha ao bloquear dados');
        try {
            $tmp = tempnam($dir, 'pm_');
            if ($tmp === false || file_put_contents($tmp, json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR)) === false || !rename($tmp, $this->file)) throw new \RuntimeException('Falha ao gravar dados');
        } finally { flock($fp, LOCK_UN); fclose($fp); }
    }
}
