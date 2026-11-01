<?php
declare(strict_types=1);
namespace App\Core;
final class AdminAuth {
 private static function file(): string {return dirname(__DIR__,2).'/storage/data/admin.json';}
 public static function logged(): bool {return !empty($_SESSION['pm_admin']) && $_SESSION['pm_admin'] === true;}
 public static function requireLogin(): void {if (!self::logged()) {header('Location: '.base_url('admin/login'));exit;}}
 public static function login(string $password): bool {
  $file=self::file(); $data=is_file($file)?json_decode((string)file_get_contents($file),true):null;
  if (!is_array($data)||empty($data['password_hash'])||!password_verify($password,$data['password_hash']))return false;
  session_regenerate_id(true);$_SESSION['pm_admin']=true;return true;
 }
 public static function logout(): void {unset($_SESSION['pm_admin']);session_regenerate_id(true);}
}
