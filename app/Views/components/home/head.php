<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeMarke | Soluções digitais que elevam sua marca</title>

    <!-- SEO & Open Graph -->
    <meta name="description"
        content="Transformamos ideias em resultados reais. Criamos sites profissionais, landing pages e lojas virtuais para sua empresa crescer.">
    <meta property="og:title" content="PrimeMarke - Agência Digital">
    <meta property="og:description"
        content="Soluções digitais que elevam sua marca. Fale conosco e leve seu projeto ao próximo nível.">
    <meta property="og:type" content="website">

    <!-- Tailwind CSS (CDN Configuração) -->
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
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Fontes e Ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bibliotecas de Animação e Slider -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- CSS Externo -->
    <link rel="stylesheet" href="<?= htmlspecialchars(base_url('public/assets'), ENT_QUOTES, 'UTF-8') ?>/css/style.css">
</head>
