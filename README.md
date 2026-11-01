# PrimeMarke MVC — Bloco 05

PHP 8.0 + XAMPP, sem Composer obrigatório.

## Instalação
1. Extraia em `C:\xampp\htdocs\newprimemarke`.
2. Inicie Apache e acesse `http://localhost/newprimemarke/`.
3. Não há necessidade de importar SQL nesta etapa.

## Portfólio dinâmico
- `app/Models/Project.php`: listagem, busca, validação, gravação e exclusão para integração futura.
- `storage/data/projects.json`: fonte de dados.
- `app/Views/components/portfolio/card.php`: card reutilizável.
- `HomeController`: entrega somente projetos publicados, ordenados.
- Filtros e modal existentes preservados.

**Importante:** não existe painel administrativo nem rota pública de gravação nesta versão. Para testes, edite `storage/data/projects.json` manualmente.
`published: true` publica o projeto. `published: false` mantém rascunho. Os exemplos fictícios foram mantidos como rascunho para não anunciar trabalhos não comprovados.

Imagens locais: `public/assets/img/nome.png`; imagens remotas: URL HTTPS. Categorias: `sites`, `landing-pages`, `lojas`, `catalogos`, `pagina-links`.

## Sessão
`session_start()` foi movido para o `index.php` antes da renderização HTML, corrigindo o warning relatado na View.

## Próximo bloco
Painel administrativo com autenticação, CSRF, upload validado e interface CRUD.
