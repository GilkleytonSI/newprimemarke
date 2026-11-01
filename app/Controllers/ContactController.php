<?php
declare(strict_types=1);
namespace App\Controllers;
use App\Core\Csrf;
final class ContactController {
    public function send(): void {
        if (session_status() !== PHP_SESSION_ACTIVE) session_start();
        $redirect = base_url('#contato');
        $feedback = static function (string $type, string $message) use ($redirect): void {
            $_SESSION['contact_flash'] = ['type'=>$type,'message'=>$message];
            header('Location: ' . $redirect, true, 303);
            exit;
        };
        if (!Csrf::verify((string)($_POST['_csrf'] ?? ''))) { http_response_code(403); $feedback('error','Sessão expirada. Atualize a página e tente novamente.'); }
        // Campo invisível para robôs; nunca revela se houve envio.
        if (!empty($_POST['website'])) $feedback('success','Solicitação recebida.');
        $name = trim((string)($_POST['name'] ?? ''));
        $email = trim((string)($_POST['email'] ?? ''));
        $phone = trim((string)($_POST['phone'] ?? ''));
        $service = trim((string)($_POST['service'] ?? ''));
        $message = trim((string)($_POST['message'] ?? ''));
        if (strlen($name)>120 || strlen($email)>254 || strlen($phone)>35 || strlen($service)>100 || strlen($message)>3000 ||
            strlen($name)<2 || !filter_var($email,FILTER_VALIDATE_EMAIL) || strlen($message)<10 ||
            preg_match('/[\r\n]/', $name.$email.$phone.$service)) {
            $feedback('error','Confira nome, e-mail e mensagem (mínimo de 10 caracteres).');
        }
        $now = time();
        if (isset($_SESSION['last_contact_at']) && $now - (int)$_SESSION['last_contact_at'] < 60) {
            $feedback('error','Aguarde um minuto antes de enviar outra solicitação.');
        }
        $cfg = require dirname(__DIR__, 2).'/config/mail.php';
        if (!filter_var($cfg['to'], FILTER_VALIDATE_EMAIL) || !filter_var($cfg['from'], FILTER_VALIDATE_EMAIL)) {
            error_log('PrimeMarke: configure PM_CONTACT_TO e PM_CONTACT_FROM.');
            $feedback('error','O formulário está temporariamente indisponível. Entre em contato pelo WhatsApp.');
        }
        $subject = 'Novo contato pelo site PrimeMarke';
        $body = "Novo contato pelo site PrimeMarke\n\nNome: $name\nEmail: $email\nTelefone: $phone\nServiço: $service\n\nMensagem:\n$message\n";
        $headers = ['From' => $cfg['from'], 'Reply-To' => $email, 'Content-Type'=>'text/plain; charset=UTF-8', 'X-Mailer'=>'PrimeMarke MVC'];
        if (!mail($cfg['to'], $subject, $body, $headers)) {
            error_log('PrimeMarke: falha no envio via mail().');
            $feedback('error','Não foi possível enviar agora. Tente novamente ou use o WhatsApp.');
        }
        $_SESSION['last_contact_at'] = $now;
        $feedback('success','Mensagem enviada! Entraremos em contato em breve.');
    }
}
