<header class="fixed w-full top-0 z-50 transition-all duration-300" id="navbar">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between gap-3">

            <a href="#inicio" class="text-xl sm:text-2xl font-bold flex items-center gap-2 min-w-0 shrink">

                <i class="fa-solid fa-rocket text-primary shrink-0"></i>

                <span class="truncate">
                    PrimeMarke
                </span>

            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex gap-6 text-grayLight text-sm font-medium">
                <a href="#inicio" class="hover:text-primary transition" data-i18n="nav_inicio">Início</a>
                <a href="#sobre" class="hover:text-primary transition" data-i18n="nav_sobre">Sobre</a>
                <a href="#servicos" class="hover:text-primary transition" data-i18n="nav_servicos">Serviços</a>
                <a href="#portfolio" class="hover:text-primary transition" data-i18n="nav_portfolio">Portfólio</a>
                <a href="#blog" class="hover:text-primary transition" data-i18n="nav_blog">Blog</a>
                <a href="#depoimentos" class="hover:text-primary transition">Depoimentos</a>
                <a href="#faq" class="hover:text-primary transition">FAQ</a>
            </nav>

            <!-- Desktop: Idioma + WhatsApp -->
            <div class="hidden md:flex items-center gap-6">

                <!-- Idiomas -->
                <div class="flex items-center gap-3">

                    <button
                        class="lang-btn transition-all duration-300 hover:scale-110 rounded-full border-2 border-primary shadow-[0_0_10px_rgba(59,130,246,0.5)]"
                        data-lang="pt" title="Português">
                        <img src="https://flagcdn.com/w40/br.png" alt="PT"
                            class="w-6 h-6 object-cover rounded-full block">
                    </button>

                    <button
                        class="lang-btn transition-all duration-300 hover:scale-110 rounded-full border-2 border-transparent opacity-50 grayscale hover:opacity-100 hover:grayscale-0"
                        data-lang="en" title="English">
                        <img src="https://flagcdn.com/w40/us.png" alt="EN"
                            class="w-6 h-6 object-cover rounded-full block">
                    </button>

                </div>

                <a href="#contato"
                    class="inline-flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-full font-semibold glow-btn text-sm">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span data-i18n="btn_whatsapp">Falar no WhatsApp</span>
                </a>

            </div>

            <!-- Controles Mobile -->
            <div class="md:hidden flex items-center gap-2 shrink-0">

                <!-- Idiomas -->
                <div class="flex items-center gap-1.5 shrink-0">

                    <!-- Português -->
                    <button
                        class="lang-btn transition-all duration-300 hover:scale-110 rounded-full border-2 border-primary"
                        data-lang="pt" title="Português">

                        <img src="https://flagcdn.com/w40/br.png" alt="PT"
                            class="w-6 h-6 object-cover rounded-full block">

                    </button>

                    <!-- Inglês -->
                    <button
                        class="lang-btn transition-all duration-300 hover:scale-110 rounded-full border-2 border-transparent opacity-50 grayscale hover:opacity-100 hover:grayscale-0"
                        data-lang="en" title="English">

                        <img src="https://flagcdn.com/w40/us.png" alt="EN"
                            class="w-6 h-6 object-cover rounded-full block">

                    </button>

                </div>

                <!-- Botão Menu -->
                <button id="mobile-menu-btn" type="button"
                    class="w-10 h-10 shrink-0 rounded-lg bg-white/5 border border-white/10 text-white flex items-center justify-center hover:bg-primary transition-all duration-300"
                    aria-label="Abrir menu" aria-expanded="false">

                    <i id="mobile-menu-icon" class="fa-solid fa-bars text-lg"></i>

                </button>

            </div>

        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="md:hidden hidden border-t border-white/10 bg-bgMain/95 backdrop-blur-xl">

            <nav class="container mx-auto px-6 py-6 flex flex-col gap-2">

                <a href="#inicio"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition"
                    data-i18n="nav_inicio">
                    Início
                </a>

                <a href="#sobre"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition"
                    data-i18n="nav_sobre">
                    Sobre
                </a>

                <a href="#servicos"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition"
                    data-i18n="nav_servicos">
                    Serviços
                </a>

                <a href="#portfolio"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition"
                    data-i18n="nav_portfolio">
                    Portfólio
                </a>

                <a href="#blog"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Blog
                </a>

                <a href="#depoimentos"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Depoimentos
                </a>

                <a href="#faq"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    FAQ
                </a>

                <!-- WhatsApp Mobile -->
                <a href="#contato"
                    class="mobile-menu-link mt-2 inline-flex items-center justify-center gap-2 bg-primary text-white px-5 py-3 rounded-full font-semibold glow-btn">

                    <i class="fa-brands fa-whatsapp text-lg"></i>

                    <span data-i18n="btn_whatsapp">
                        Falar no WhatsApp
                    </span>

                </a>

            </nav>

        </div>
    </header>
