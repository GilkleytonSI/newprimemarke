<?php
declare(strict_types=1);
namespace App\Helpers;
final class Navigation {
    public static function home(string $anchor = ''): string {
        return \base_url() . ($anchor !== '' ? '#' . ltrim($anchor, '#') : '');
    }
}
