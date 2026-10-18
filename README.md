# PrimeMarke — MVC (Bloco 01)

Migração da versão HTML original para PHP 8.0 MVC, preservando o HTML, CSS, JS, imagens e traduções.

## Instalação XAMPP
1. Extraia a pasta `PrimeMarke-MVC` em `C:\xampp\htdocs\`.
2. Inicie o Apache no XAMPP e habilite `mod_rewrite` (padrão na maioria das instalações).
3. Abra `http://localhost/PrimeMarke-MVC/`.
4. Blog: `/PrimeMarke-MVC/blog`; artigo: `/PrimeMarke-MVC/artigo`.

## Arquitetura
- `index.php`: front controller, autoload e definição de rotas.
- `app/Core`: roteamento e renderização de views.
- `app/Controllers`: controllers da home e do blog.
- `app/Views`: HTML original convertido em views PHP.
- `public/assets`: CSS, JS e imagens originais.
- `config`: configurações futuras.

## Escopo desta etapa
Esta é uma migração estrutural, sem banco de dados, autenticação ou painel administrativo. O conteúdo do blog continua estático como no ZIP original. Header/footer ainda estão dentro das páginas para evitar alterações visuais acidentais; a extração em layouts reutilizáveis é o próximo bloco. Não há envio de e-mail backend implementado nesta etapa.

## Segurança em produção
Prefira configurar DocumentRoot para a pasta `public`. Com hospedagem que expõe a raiz, o `.htaccess` bloqueia pastas internas.
