<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Como criar um site profissional para sua empresa em 2026 | PrimeMarke</title>

    <meta name="description"
        content="Descubra os principais elementos para criar um site profissional, responsivo, rápido e preparado para gerar resultados para sua empresa.">

    <!-- Open Graph -->
    <meta property="og:title" content="Como criar um site profissional para sua empresa em 2026">
    <meta property="og:description"
        content="Veja os principais elementos que tornam um site profissional, confiável e preparado para gerar resultados.">
    <meta property="og:type" content="article">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        darkBlue: '#1E3A8A',
                        lightBlue: '#60A5FA',
                        bgMain: '#050816',
                        bgSec: '#0F172A',
                        grayLight: '#E5E7EB'
                    },

                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Fonte -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS -->
    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">

    <!-- CSS principal -->
    <link rel="stylesheet" href="<?= htmlspecialchars(base_url('public/assets'), ENT_QUOTES, 'UTF-8') ?>/css/style.css">

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            background: #050816;
            color: white;
        }

        /* Conteúdo do artigo */

        .article-content {
            color: #d1d5db;
            line-height: 1.9;
            font-size: 1.05rem;
        }

        .article-content h2 {
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            margin-top: 3rem;
            margin-bottom: 1rem;
            scroll-margin-top: 120px;
        }

        .article-content h3 {
            color: white;
            font-size: 1.35rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: .8rem;
            scroll-margin-top: 120px;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content ul {
            list-style: none;
            margin: 1.5rem 0;
        }

        .article-content li {
            position: relative;
            padding-left: 1.7rem;
            margin-bottom: .8rem;
        }

        .article-content li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #3B82F6;
            font-weight: 700;
        }

        .article-content strong {
            color: white;
        }

        .article-content blockquote {
            margin: 2.5rem 0;
            padding: 1.5rem 1.8rem;
            border-left: 4px solid #3B82F6;
            background: rgba(255, 255, 255, .04);
            border-radius: 0 1rem 1rem 0;
            color: #e5e7eb;
        }

        .article-content a {
            color: #60A5FA;
        }

        .article-content a:hover {
            text-decoration: underline;
        }

        .toc-link.active {
            color: #3B82F6;
        }

        .share-btn {
            transition:
                transform .25s ease,
                background .25s ease,
                border-color .25s ease;
        }

        .share-btn:hover {
            transform: translateY(-2px);
            border-color: rgba(59, 130, 246, .7);
            background: rgba(59, 130, 246, .12);
        }
    </style>

</head>
