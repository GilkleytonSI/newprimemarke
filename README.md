# PrimeMarke — Bloco 03 (PHP 8.0 / XAMPP)

Evolução incremental do Bloco 02, preservando HTML, estilos, animações, traduções e scripts originais.

## Alterações
- Links entre Início, Blog e Artigo padronizados para as rotas MVC onde usavam arquivos `.html` ou `.php` antigos.
- Links das seções do menu e rodapé nas páginas internas apontam para as âncoras da página inicial.
- `public/assets/js/site-common.js`: comportamento compartilhado progressivo (Escape e segurança de links externos).
- `public/assets/css/site-common.css`: foco acessível, mídia responsiva e preferência por movimento reduzido.
- Mantidos os scripts originais para evitar regressões no visual e nas interações.

## Instalação
1. Extrair a pasta `PrimeMarke-MVC-Bloco-03` em `C:\xampp\htdocs\`.
2. Iniciar Apache no XAMPP.
3. Abrir `http://localhost/PrimeMarke-MVC-Bloco-03/`, `/blog` e `/artigo`.
4. Verificar menu desktop/mobile, idiomas, animações, links e formulário no navegador.

## Observações
- Não foi criado banco de dados, blog dinâmico ou painel administrativo neste bloco.
- O layout original permanece em componentes específicos por página; unificações adicionais requerem validação visual.
- Dependências de CDN exigem internet. Testes visuais e funcionais em navegador ainda são necessários.
