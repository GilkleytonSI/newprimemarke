<header
        class="fixed w-full top-0 z-50 transition-all duration-300 bg-bgMain/90 backdrop-blur-xl border-b border-white/5"
        id="navbar">

        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between gap-3">

            <!-- Logo -->
            <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>"
                class="text-xl sm:text-2xl font-bold flex items-center gap-2 min-w-0 shrink">

                <i class="fa-solid fa-rocket text-primary shrink-0"></i>

                <span class="truncate">
                    PrimeMarke
                </span>

            </a>


            <!-- Menu Desktop -->
            <nav class="hidden md:flex gap-6 text-grayLight text-sm font-medium">

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#inicio"
                    class="hover:text-primary transition">
                    Início
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#sobre"
                    class="hover:text-primary transition">
                    Sobre
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#servicos"
                    class="hover:text-primary transition">
                    Serviços
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#portfolio"
                    class="hover:text-primary transition">
                    Portfólio
                </a>

                <a href="<?= htmlspecialchars(base_url('blog'), ENT_QUOTES, 'UTF-8') ?>"
                    class="text-primary">
                    Blog
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#contato"
                    class="hover:text-primary transition">
                    Contato
                </a>

            </nav>


            <!-- Desktop Controles -->
            <div class="hidden md:flex items-center gap-5">

                <!-- Idiomas -->
                <div class="flex items-center gap-2">

                    <button
                        class="lang-btn rounded-full border-2 border-primary transition hover:scale-110"
                        data-lang="pt"
                        title="Português">

                        <img
                            src="https://flagcdn.com/w40/br.png"
                            alt="Português"
                            class="w-6 h-6 object-cover rounded-full">

                    </button>

                    <button
                        class="lang-btn rounded-full border-2 border-transparent opacity-50 grayscale transition hover:scale-110 hover:opacity-100 hover:grayscale-0"
                        data-lang="en"
                        title="English">

                        <img
                            src="https://flagcdn.com/w40/us.png"
                            alt="English"
                            class="w-6 h-6 object-cover rounded-full">

                    </button>

                </div>

                <!-- WhatsApp -->
                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#contato"
                    class="inline-flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-full font-semibold glow-btn text-sm">

                    <i class="fa-brands fa-whatsapp text-lg"></i>

                    Falar no WhatsApp

                </a>

            </div>


            <!-- Mobile Controles -->
            <div class="md:hidden flex items-center gap-2 shrink-0">

                <!-- Idiomas -->
                <div class="flex items-center gap-1.5 shrink-0">

                    <button
                        class="lang-btn rounded-full border-2 border-primary"
                        data-lang="pt"
                        title="Português">

                        <img
                            src="https://flagcdn.com/w40/br.png"
                            alt="PT"
                            class="w-6 h-6 object-cover rounded-full">

                    </button>

                    <button
                        class="lang-btn rounded-full border-2 border-transparent opacity-50 grayscale"
                        data-lang="en"
                        title="English">

                        <img
                            src="https://flagcdn.com/w40/us.png"
                            alt="EN"
                            class="w-6 h-6 object-cover rounded-full">

                    </button>

                </div>

                <!-- Botão Menu -->
                <button
                    id="mobile-menu-btn"
                    type="button"
                    class="w-10 h-10 shrink-0 rounded-lg bg-white/5 border border-white/10 text-white flex items-center justify-center hover:bg-primary transition"
                    aria-label="Abrir menu"
                    aria-expanded="false">

                    <i id="mobile-menu-icon"
                        class="fa-solid fa-bars text-lg"></i>

                </button>

            </div>

        </div>


        <!-- Menu Mobile -->
        <div
            id="mobile-menu"
            class="md:hidden hidden border-t border-white/10 bg-bgMain/95 backdrop-blur-xl">

            <nav class="max-w-7xl mx-auto px-4 py-5 flex flex-col gap-2">

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#inicio"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Início
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#sobre"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Sobre
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#servicos"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Serviços
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#portfolio"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Portfólio
                </a>

                <a href="<?= htmlspecialchars(base_url('blog'), ENT_QUOTES, 'UTF-8') ?>"
                    class="mobile-menu-link px-4 py-3 rounded-lg bg-primary/10 text-primary">
                    Blog
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#contato"
                    class="mobile-menu-link px-4 py-3 rounded-lg text-grayLight hover:text-white hover:bg-white/5 transition">
                    Contato
                </a>

                <a href="<?= htmlspecialchars(base_url(), ENT_QUOTES, 'UTF-8') ?>#contato"
                    class="mobile-menu-link mt-2 inline-flex items-center justify-center gap-2 bg-primary text-white px-5 py-3 rounded-full font-semibold glow-btn">

                    <i class="fa-brands fa-whatsapp"></i>

                    Falar no WhatsApp

                </a>

            </nav>

        </div>

    </header>
