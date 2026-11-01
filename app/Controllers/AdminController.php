<?php
declare(strict_types=1);
namespace App\Controllers;
use App\Core\{AdminAuth,Csrf,View};
use App\Models\Project;
final class AdminController {
 private function redirect(string $path): void {header('Location: '.base_url($path));exit;}
 private function check(): void {if (!Csrf::verify((string)($_POST['_csrf']??''))) {http_response_code(419);exit('Sessão expirada. Atualize a página e tente novamente.');}}
 private function flash(string $msg): void {$_SESSION['pm_flash']=$msg;}
 public function loginForm(): void {if(AdminAuth::logged())$this->redirect('admin');View::render('admin/login');}
 public function login(): void {$this->check();$count=(int)($_SESSION['pm_login_attempts']??0);$since=(int)($_SESSION['pm_login_since']??time());if(time()-$since>900){$count=0;$since=time();}if($count>=5){http_response_code(429);View::render('admin/login',['error'=>'Muitas tentativas. Tente novamente em 15 minutos.']);return;}if(AdminAuth::login((string)($_POST['password']??''))){unset($_SESSION['pm_login_attempts'],$_SESSION['pm_login_since']);$this->redirect('admin');}$_SESSION['pm_login_attempts']=$count+1;$_SESSION['pm_login_since']=$since;View::render('admin/login',['error'=>'Senha inválida ou administrador ainda não configurado.']);}
 public function logout(): void {$this->check();AdminAuth::logout();$this->redirect('admin/login');}
 public function index(): void {AdminAuth::requireLogin();$projects=(new Project())->all();View::render('admin/index',['projects'=>$projects,'flash'=>$this->takeFlash()]);}
 private function takeFlash(): string {$f=(string)($_SESSION['pm_flash']??'');unset($_SESSION['pm_flash']);return $f;}
 public function form(): void {AdminAuth::requireLogin();$id=(string)($_GET['id']??'');$project=$id!==''?(new Project())->find($id):null;if($id!==''&&!$project){http_response_code(404);exit('Projeto não encontrado');}View::render('admin/form',['project'=>$project,'error'=>'']);}
 public function save(): void {
  AdminAuth::requireLogin();$this->check();$repo=new Project();$id=(string)($_POST['id']??'');$existing=$id!==''?$repo->find($id):null;
  if($id!==''&&!$existing){http_response_code(404);exit('Projeto não encontrado');}
  $input=$_POST;$input['published']=isset($_POST['published']);$input['image']=$existing['image']??'';
  try {$upload=$_FILES['image_upload']??null;if(is_array($upload)&&($upload['error']??UPLOAD_ERR_NO_FILE)!==UPLOAD_ERR_NO_FILE){$input['image']=$this->upload($upload);}
   $repo->save($input);$this->flash('Projeto salvo com sucesso.');$this->redirect('admin');
  }catch(\Throwable $e){View::render('admin/form',['project'=>array_merge($existing??[],$input),'error'=>$e instanceof \InvalidArgumentException?$e->getMessage():'Não foi possível salvar o projeto.']);}
 }
 private function upload(array $file): string {
  if(($file['error']??-1)!==UPLOAD_ERR_OK||($file['size']??0)>3*1024*1024||($file['size']??0)<1)throw new \InvalidArgumentException('Imagem inválida ou maior que 3 MB.');
  $tmp=(string)($file['tmp_name']??'');if(!is_uploaded_file($tmp))throw new \InvalidArgumentException('Upload inválido.');
  $mime=(new \finfo(FILEINFO_MIME_TYPE))->file($tmp);$types=['image/jpeg'=>'jpg','image/png'=>'png','image/webp'=>'webp'];
  if(!isset($types[$mime])||@getimagesize($tmp)===false)throw new \InvalidArgumentException('Envie uma imagem JPG, PNG ou WebP.');
  $dir=dirname(__DIR__,2).'/public/assets/img/portfolio';if(!is_dir($dir)&&!mkdir($dir,0775,true)&&!is_dir($dir))throw new \RuntimeException('Pasta indisponível');
  $name=bin2hex(random_bytes(16)).'.'.$types[$mime];if(!move_uploaded_file($tmp,$dir.'/'.$name))throw new \RuntimeException('Falha no upload');
  return 'public/assets/img/portfolio/'.$name;
 }
 public function delete(): void {AdminAuth::requireLogin();$this->check();$id=(string)($_POST['id']??'');if(!(new Project())->find($id)){http_response_code(404);exit('Projeto não encontrado');}(new Project())->delete($id);$this->flash('Projeto excluído.');$this->redirect('admin');}
 public function toggle(): void {AdminAuth::requireLogin();$this->check();$repo=new Project();$p=$repo->find((string)($_POST['id']??''));if(!$p){http_response_code(404);exit('Projeto não encontrado');}$p['published']=!$p['published'];$repo->save($p);$this->flash('Status atualizado.');$this->redirect('admin');}
}
