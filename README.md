# PrimeMarke — Bloco 02: Componentização do layout

Projeto MVC para PHP 8.0 / XAMPP. Não requer banco de dados.

## Como instalar
1. Extraia `PrimeMarke-MVC-Bloco-02` em `C:\xampp\htdocs\`.
2. Inicie o Apache.
3. Acesse `http://localhost/PrimeMarke-MVC-Bloco-02/`.
4. Rotas: `/`, `/blog`, `/artigo`.

## Componentes
Os arquivos `app/Views/components/{home,blog,article}/{head,header,footer}.php`
foram extraídos diretamente das três páginas originais, sem reescrever classes CSS,
atributos JS, menus, idioma ou conteúdo. As views em `home/` e `blog/` agora
compõem essas partes com `require`.

**Por que existem variantes?** As três páginas tinham cabeçalhos e rodapés
com HTML e comportamento diferentes. Para preservar o visual, a etapa 02
separa primeiro cada variante; uma unificação de design exige validação visual
e funcional antes de remover as variantes.

## Próximas melhorias
- Consolidar um header/footer único após homologação do design entre páginas.
- Migrar scripts inline e configurar menus por rota, sem quebrar as âncoras.
- Blog dinâmico e painel administrativo em etapas futuras.

Nenhum arquivo original de assets foi removido.
