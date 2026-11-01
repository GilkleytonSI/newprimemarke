# PrimeMarke MVC — Bloco 06

Inclui os Blocos 01–05 e painel de administração do portfólio.

## Instalação no XAMPP
1. Extraia `PrimeMarke-MVC` em `C:\xampp\htdocs\newprimemarke` (faça backup da pasta antiga antes).
2. Inicie Apache. PHP 8.0+, extensões `fileinfo`, `mbstring` e `session` habilitadas.
3. No PowerShell, crie o administrador (escolha uma senha forte):

```powershell
cd C:\xampp\htdocs\newprimemarke
$env:PM_ADMIN_PASSWORD = 'SUA-SENHA-FORTE-COM-12-OU-MAIS-CARACTERES'
C:\xampp\php\php.exe scripts\create-admin.php
Remove-Item Env:PM_ADMIN_PASSWORD
```

4. Acesse `http://localhost/newprimemarke/admin/login` e informe a senha criada.
5. O portfólio público permanece na página inicial.

## Recursos
- Login com hash `password_hash`, sessão regenerada, limite de 5 tentativas por sessão a cada 15 minutos.
- Dashboard, cadastro, edição, publicar/despublicar, exclusão com modal Bootstrap.
- Upload JPG/PNG/WebP até 3 MB, nome aleatório, MIME e conteúdo de imagem verificados.
- Token CSRF em todos os formulários; dados persistidos em `storage/data/projects.json`.
- Nenhuma senha padrão é fornecida.

## Notas de segurança
- Use HTTPS em produção e defina cookies seguros para sessões.
- O limite de tentativas por sessão é básico e **não substitui** bloqueio por IP ou proteção na borda.
- JSON é adequado para uma instalação pequena e único administrador; para múltiplos administradores, migre para MySQL.
- O upload de imagem não é reprocessado; para produção, recomenda-se reencodar imagens e configurar CSP e limites no servidor.
- Faça backup de `storage/data` e `public/assets/img/portfolio` antes de atualizar.
- Não execute o script de criação de administrador se o arquivo `admin.json` já existir.
