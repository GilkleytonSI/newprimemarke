<?php
namespace App\Controllers;
use App\Core\View;
final class BlogController {
    public function index(): void { View::render('blog/index'); }
    public function show(): void { View::render('blog/show'); }
}
