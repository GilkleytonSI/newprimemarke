<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">

<?php require dirname(__DIR__, 1) . '/components/blog/head.php'; ?>

<body class="antialiased selection:bg-primary selection:text-white">

    <!-- Header -->
    <?php require dirname(__DIR__, 1) . '/components/blog/header.php'; ?>


    <!-- Hero Blog -->
    <section
        class="relative pt-36 pb-20 md:pt-44 md:pb-28 overflow-hidden">

        <!-- Efeitos -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-primary/10 rounded-full blur-[120px]">
        </div>

        <div
            class="absolute right-0 top-40 w-72 h-72 bg-darkBlue/20 rounded-full blur-[100px]">
        </div>


        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">

            <div
                class="max-w-3xl mx-auto text-center"
                data-aos="fade-up">

                <span
                    class="inline-flex items-center gap-2 text-primary uppercase tracking-wider text-sm font-semibold mb-5">

                    <i class="fa-solid fa-newspaper"></i>

                    Blog PrimeMarke

                </span>


                <h1
                    class="text-4xl md:text-6xl font-bold leading-tight mb-6">

                    Ideias, estratégias e tecnologia para

                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-lightBlue to-primary">

                        fazer sua empresa crescer

                    </span>

                </h1>


                <p
                    class="text-grayLight text-lg leading-relaxed max-w-2xl mx-auto mb-10">

                    Conteúdos sobre desenvolvimento web, marketing digital,
                    tecnologia, inteligência artificial e negócios para ajudar
                    empresas a crescer no ambiente digital.

                </p>


                <!-- Busca -->
                <div
                    class="relative max-w-2xl mx-auto">

                    <i
                        class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-grayLight">
                    </i>

                    <input
                        type="search"
                        id="blog-search"
                        placeholder="Pesquisar artigos..."
                        class="blog-search w-full bg-white/5 border border-white/10 rounded-full py-4 pl-14 pr-6 outline-none text-white placeholder:text-gray-500 transition">

                </div>

            </div>

        </div>

    </section>


    <!-- Categorias -->
    <section class="pb-10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="flex flex-wrap justify-center gap-3"
                data-aos="fade-up">

                <button
                    class="blog-filter-btn active border border-primary px-5 py-2.5 rounded-full text-sm font-medium transition"
                    data-filter="all">

                    Todos

                </button>

                <button
                    class="blog-filter-btn glass border border-white/20 text-grayLight px-5 py-2.5 rounded-full text-sm font-medium transition hover:text-white hover:border-primary"
                    data-filter="desenvolvimento">

                    Desenvolvimento

                </button>

                <button
                    class="blog-filter-btn glass border border-white/20 text-grayLight px-5 py-2.5 rounded-full text-sm font-medium transition hover:text-white hover:border-primary"
                    data-filter="marketing">

                    Marketing

                </button>

                <button
                    class="blog-filter-btn glass border border-white/20 text-grayLight px-5 py-2.5 rounded-full text-sm font-medium transition hover:text-white hover:border-primary"
                    data-filter="tecnologia">

                    Tecnologia

                </button>

                <button
                    class="blog-filter-btn glass border border-white/20 text-grayLight px-5 py-2.5 rounded-full text-sm font-medium transition hover:text-white hover:border-primary"
                    data-filter="ia">

                    Inteligência Artificial

                </button>

                <button
                    class="blog-filter-btn glass border border-white/20 text-grayLight px-5 py-2.5 rounded-full text-sm font-medium transition hover:text-white hover:border-primary"
                    data-filter="negocios">

                    Negócios

                </button>

            </div>

        </div>

    </section>


    <!-- Destaque -->
    <section class="py-14">

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="blog-post blog-card glass-card border border-white/10 rounded-3xl overflow-hidden grid lg:grid-cols-2"
                data-category="desenvolvimento"
                data-title="Como criar um site profissional para sua empresa em 2026"
                data-aos="fade-up">

                <!-- Imagem -->
                <div
                    class="relative min-h-[320px] lg:min-h-[480px] overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85"
                        alt="Desenvolvimento de site"
                        class="absolute inset-0 w-full h-full object-cover">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-bgMain/80 via-transparent to-transparent">
                    </div>

                    <span
                        class="absolute top-6 left-6 bg-primary px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider">

                        Destaque

                    </span>

                </div>


                <!-- Texto -->
                <div class="p-8 md:p-12 flex flex-col justify-center">

                    <span
                        class="text-primary text-xs font-bold uppercase tracking-wider mb-4">

                        Desenvolvimento Web

                    </span>


                    <h2
                        class="text-3xl md:text-4xl font-bold leading-tight mb-5">

                        Como criar um site profissional para sua empresa em 2026

                    </h2>


                    <p
                        class="text-grayLight leading-relaxed mb-7">

                        Descubra quais elementos fazem um site transmitir
                        credibilidade, gerar oportunidades e transformar
                        visitantes em potenciais clientes.

                    </p>


                    <div
                        class="flex flex-wrap items-center gap-5 text-sm text-grayLight mb-8">

                        <span>
                            <i class="fa-regular fa-calendar text-primary mr-2"></i>
                            20 Ago 2026
                        </span>

                        <span>
                            <i class="fa-regular fa-clock text-primary mr-2"></i>
                            6 min
                        </span>

                        <span>
                            <i class="fa-regular fa-user text-primary mr-2"></i>
                            PrimeMarke
                        </span>

                    </div>


                    <div>

                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 bg-primary text-white px-7 py-3 rounded-full font-semibold glow-btn">

                            Ler artigo

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Artigos Recentes -->
    <section class="py-16 bg-bgSec border-t border-white/5">

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Título -->
            <div
                class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-12"
                data-aos="fade-up">

                <div>

                    <span
                        class="text-primary uppercase tracking-wider text-sm font-semibold">

                        Conteúdos recentes

                    </span>

                    <h2
                        class="text-3xl md:text-4xl font-bold mt-2">

                        Últimos artigos

                    </h2>

                </div>


                <p
                    class="text-grayLight max-w-lg text-sm md:text-right">

                    Novos conteúdos sobre tecnologia, negócios e estratégias
                    digitais para ajudar sua empresa a crescer.

                </p>

            </div>


            <!-- Grid -->
            <div
                id="blog-grid"
                class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">


                <!-- Artigo 1 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="marketing"
                    data-title="7 estratégias para melhorar a presença digital da sua empresa"
                    data-aos="fade-up">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80"
                            alt="Marketing Digital"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Marketing Digital

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            7 estratégias para melhorar a presença digital da sua empresa

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Conheça estratégias práticas para fortalecer sua
                            marca e conquistar novas oportunidades no digital.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                18 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                5 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>


                <!-- Artigo 2 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="ia"
                    data-title="Como a inteligência artificial pode ajudar pequenas empresas"
                    data-aos="fade-up"
                    data-aos-delay="100">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=900&q=80"
                            alt="Inteligência Artificial"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Inteligência Artificial

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            Como a inteligência artificial pode ajudar pequenas empresas

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Automação, atendimento, conteúdo e análise de dados
                            são algumas das aplicações da IA nos negócios.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                15 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                7 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>


                <!-- Artigo 3 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="desenvolvimento"
                    data-title="Por que sua empresa precisa de um site responsivo"
                    data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=900&q=80"
                            alt="Site Responsivo"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Desenvolvimento

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            Por que sua empresa precisa de um site responsivo?

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Entenda a importância de oferecer uma experiência
                            rápida e profissional em celulares e tablets.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                12 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                4 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>


                <!-- Artigo 4 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="negocios"
                    data-title="Como transformar sua presença digital em uma ferramenta de vendas"
                    data-aos="fade-up">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=80"
                            alt="Negócios Digitais"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Negócios

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            Como transformar sua presença digital em uma ferramenta de vendas

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Site, redes sociais, WhatsApp e conteúdo podem
                            trabalhar juntos para gerar oportunidades.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                10 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                6 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>


                <!-- Artigo 5 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="marketing"
                    data-title="Como usar o Instagram para atrair clientes para sua empresa"
                    data-aos="fade-up"
                    data-aos-delay="100">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=900&q=80"
                            alt="Instagram para empresas"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Redes Sociais

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            Como usar o Instagram para atrair clientes para sua empresa

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Aprenda como conteúdo, WhatsApp e páginas de links
                            podem transformar seu perfil em um canal de vendas.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                08 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                5 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>


                <!-- Artigo 6 -->
                <article
                    class="blog-post blog-card glass-card border border-white/10 rounded-2xl overflow-hidden group"
                    data-category="tecnologia"
                    data-title="5 tecnologias que pequenas empresas deveriam conhecer"
                    data-aos="fade-up"
                    data-aos-delay="200">

                    <div class="h-56 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80"
                            alt="Tecnologia"
                            class="w-full h-full object-cover">

                    </div>


                    <div class="p-7">

                        <span
                            class="text-primary text-xs font-bold uppercase tracking-wider block mb-3">

                            Tecnologia

                        </span>


                        <h3
                            class="text-xl font-bold leading-snug mb-3">

                            5 tecnologias que pequenas empresas deveriam conhecer

                        </h3>


                        <p
                            class="text-grayLight text-sm leading-relaxed mb-5">

                            Conheça ferramentas capazes de melhorar produtividade,
                            atendimento e organização empresarial.

                        </p>


                        <div
                            class="flex items-center gap-4 text-xs text-grayLight mb-5">

                            <span>
                                <i class="fa-regular fa-calendar text-primary mr-1"></i>
                                05 Ago 2026
                            </span>

                            <span>
                                <i class="fa-regular fa-clock text-primary mr-1"></i>
                                5 min
                            </span>

                        </div>


                        <a
                            href="<?= htmlspecialchars(base_url('artigo'), ENT_QUOTES, 'UTF-8') ?>"
                            class="inline-flex items-center gap-2 text-sm font-semibold hover:text-primary transition">

                            Ler artigo

                            <i class="fa-solid fa-chevron-right text-xs"></i>

                        </a>

                    </div>

                </article>

            </div>


            <!-- Nenhum Resultado -->
            <div
                id="no-results"
                class="hidden text-center py-20">

                <div
                    class="w-16 h-16 bg-primary/10 rounded-full mx-auto flex items-center justify-center mb-5">

                    <i
                        class="fa-solid fa-magnifying-glass text-primary text-2xl">
                    </i>

                </div>

                <h3 class="text-xl font-bold mb-2">
                    Nenhum artigo encontrado
                </h3>

                <p class="text-grayLight">
                    Tente pesquisar outro termo ou selecionar outra categoria.
                </p>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="py-24 bg-bgMain">

        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div
                class="glass-card border border-white/10 rounded-3xl p-8 md:p-14 text-center relative overflow-hidden"
                data-aos="fade-up">

                <div
                    class="absolute -top-28 -right-28 w-72 h-72 bg-primary/20 rounded-full blur-[90px]">
                </div>

                <div
                    class="absolute -bottom-28 -left-28 w-72 h-72 bg-darkBlue/30 rounded-full blur-[90px]">
                </div>


                <div class="relative z-10">

                    <span
                        class="text-primary uppercase text-sm font-semibold tracking-wider">

                        PrimeMarke

                    </span>


                    <h2
                        class="text-3xl md:text-4xl font-bold mt-3 mb-5">

                        Sua empresa está preparada para crescer no digital?

                    </h2>


                    <p
                        class="text-grayLight max-w-2xl mx-auto mb-8 leading-relaxed">

                        Criamos sites, landing pages, lojas virtuais,
                        catálogos digitais e soluções personalizadas para
                        transformar sua presença online.

                    </p>


                    <a
                        href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#contato"
                        class="inline-flex items-center gap-2 bg-primary text-white px-8 py-4 rounded-full font-bold glow-btn">

                        <i class="fa-brands fa-whatsapp"></i>

                        Solicitar orçamento

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <?php require dirname(__DIR__, 1) . '/components/blog/footer.php'; ?>


    <!-- Voltar ao Topo -->
    <button
        id="backToTop"
        class="fixed bottom-6 right-6 w-12 h-12 bg-primary rounded-full text-white shadow-[0_0_15px_rgba(59,130,246,0.6)] flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 z-50">

        <i class="fa-solid fa-arrow-up"></i>

    </button>


    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // ==========================================
        // AOS
        // ==========================================

        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });


        // ==========================================
        // MENU MOBILE
        // ==========================================

        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');
        const mobileLinks = document.querySelectorAll('.mobile-menu-link');

        function closeMobileMenu() {

            if (!mobileMenu) return;

            mobileMenu.classList.add('hidden');

            mobileMenuIcon.classList.remove('fa-xmark');
            mobileMenuIcon.classList.add('fa-bars');

            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }


        mobileMenuBtn?.addEventListener('click', () => {

            const isOpen = !mobileMenu.classList.contains('hidden');

            if (isOpen) {

                closeMobileMenu();

            } else {

                mobileMenu.classList.remove('hidden');

                mobileMenuIcon.classList.remove('fa-bars');
                mobileMenuIcon.classList.add('fa-xmark');

                mobileMenuBtn.setAttribute('aria-expanded', 'true');

            }

        });


        mobileLinks.forEach(link => {

            link.addEventListener('click', closeMobileMenu);

        });


        // ==========================================
        // BUSCA + FILTROS
        // ==========================================

        const searchInput = document.getElementById('blog-search');

        const filterButtons =
            document.querySelectorAll('.blog-filter-btn');

        const posts =
            document.querySelectorAll('.blog-post');

        const noResults =
            document.getElementById('no-results');

        let activeFilter = 'all';


        function filterPosts() {

            const searchTerm =
                searchInput.value.toLowerCase().trim();

            let visiblePosts = 0;


            posts.forEach(post => {

                const category =
                    post.dataset.category;

                const title =
                    post.dataset.title.toLowerCase();


                const matchesCategory =
                    activeFilter === 'all' ||
                    category === activeFilter;


                const matchesSearch =
                    title.includes(searchTerm);


                if (matchesCategory && matchesSearch) {

                    post.style.display = '';

                    visiblePosts++;

                } else {

                    post.style.display = 'none';

                }

            });


            if (visiblePosts === 0) {

                noResults.classList.remove('hidden');

            } else {

                noResults.classList.add('hidden');

            }

        }


        searchInput.addEventListener(
            'input',
            filterPosts
        );


        filterButtons.forEach(button => {

            button.addEventListener('click', () => {

                activeFilter =
                    button.dataset.filter;


                filterButtons.forEach(btn => {

                    btn.classList.remove('active');

                });


                button.classList.add('active');

                filterPosts();

            });

        });


        // ==========================================
        // VOLTAR AO TOPO
        // ==========================================

        const backToTop =
            document.getElementById('backToTop');


        window.addEventListener('scroll', () => {

            if (window.scrollY > 500) {

                backToTop.classList.remove(
                    'opacity-0',
                    'pointer-events-none'
                );

            } else {

                backToTop.classList.add(
                    'opacity-0',
                    'pointer-events-none'
                );

            }

        });


        backToTop.addEventListener('click', () => {

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });

    </script>

    <!-- Caso queira manter seu sistema de tradução -->
    <script src="<?= htmlspecialchars(base_url('public/assets'), ENT_QUOTES, 'UTF-8') ?>/js/translations.js"></script>

</body>

</html>