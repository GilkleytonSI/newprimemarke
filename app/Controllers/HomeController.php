<?php
declare(strict_types=1);
namespace App\Controllers;
use App\Core\View;
use App\Models\Project;
final class HomeController {
    public function index(): void { View::render('home/index', ['projects' => (new Project())->published()]); }
}
