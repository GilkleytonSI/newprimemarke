<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog | PrimeMarke</title>

    <meta name="description"
        content="Conteúdos sobre tecnologia, marketing digital, desenvolvimento web, inteligência artificial e negócios.">

    <!-- Tailwind CSS -->
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

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Projeto -->
    <link rel="stylesheet" href="<?= htmlspecialchars(base_url('public/assets'), ENT_QUOTES, 'UTF-8') ?>/css/style.css">

    <style>
        body {
            background: #050816;
            color: #ffffff;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .blog-search:focus {
            box-shadow: 0 0 0 1px #3B82F6, 0 0 20px rgba(59, 130, 246, 0.15);
        }

        .blog-card {
            transition:
                transform 0.3s ease,
                border-color 0.3s ease,
                box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.45);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .blog-card img {
            transition: transform 0.6s ease;
        }

        .blog-card:hover img {
            transform: scale(1.06);
        }

        .blog-filter-btn.active {
            background: #3B82F6;
            color: white;
            border-color: #3B82F6;
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.4);
        }
    </style>
</head>
